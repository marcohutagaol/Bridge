<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactController extends Controller
{

   public function index()
   {
       return view('contact.index');
   }

   /**
    * Store a new message
    */
   public function store(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'name' => 'required|string|max:255',
           'email' => 'required|email|max:255',
           'subject' => 'required|string|max:255',
           'message' => 'required|string',
           'template_type' => 'nullable|string|in:career-guidance,academic-consultation,scholarship-info,skill-development,internship-job,research-thesis'
       ]);

       if ($validator->fails()) {
           return redirect()->back()
               ->withErrors($validator)
               ->withInput();
       }
       try {
           // INSERT INTO messages (user_id, name, email, subject, message, template_type, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
           Message::create([
               'user_id' => Auth::id(),
               'name' => $request->name,
               'email' => $request->email,
               'subject' => $request->subject,
               'message' => $request->message,
               'template_type' => $request->template_type,
               'status' => 'unread'
           ]);

           return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim. Kami akan segera merespon.');

       } catch (\Exception $e) {
           return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
       }
   }

   public function analytics()
   {
       // SELECT COUNT(*) FROM messages
       $totalMessages = Message::count();
       
       // SELECT status, COUNT(*) as count FROM messages GROUP BY status
       $statusCounts = Message::select('status', DB::raw('count(*) as count'))
           ->groupBy('status')
           ->pluck('count', 'status');
       
       $readMessages = $statusCounts['read'] ?? 0;
       $unreadMessages = $statusCounts['unread'] ?? 0;
       $repliedMessages = $statusCounts['replied'] ?? 0;
       
       // SELECT template_type, COUNT(*) as count FROM messages GROUP BY template_type
       $templateStatsRaw = Message::select('template_type', DB::raw('count(*) as count'))
           ->groupBy('template_type')
           ->pluck('count', 'template_type');
       
       $templateStats = [];
       foreach ($templateStatsRaw as $template => $count) {
           if (is_null($template) || empty($template)) {
               $templateStats['others'] = ($templateStats['others'] ?? 0) + $count;
           } else {
               $templateStats[$template] = $count;
           }
       }
       
       $statusStats = [
           'unread' => $unreadMessages,
           'read' => $readMessages,
           'replied' => $repliedMessages
       ];
       
       // SELECT DATE_FORMAT(created_at, '%Y-%m') as month, COUNT(*) as count FROM messages WHERE created_at >= ? GROUP BY month ORDER BY month
       $monthlyData = Message::select(
               DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
               DB::raw('count(*) as count')
           )
           ->where('created_at', '>=', Carbon::now()->subMonths(6))
           ->groupBy('month')
           ->orderBy('month')
           ->get()
           ->map(function ($item) {
               $item->month = Carbon::createFromFormat('Y-m', $item->month)->format('M Y');
               return $item;
           });
       
       // SELECT * FROM messages LEFT JOIN users ON messages.user_id = users.id ORDER BY messages.created_at DESC LIMIT 10
       $recentMessages = Message::with('user')
           ->orderBy('created_at', 'desc')
           ->limit(10)
           ->get();
       
       return view('admin.message.message', compact(
           'totalMessages',
           'readMessages', 
           'unreadMessages', 
           'repliedMessages',
           'templateStats',
           'statusStats',
           'monthlyData',
           'recentMessages'
       ));
   }

   /**
    * Display messages for admin
    */
   public function adminIndex(Request $request)
   {
       // SELECT * FROM messages LEFT JOIN users ON messages.user_id = users.id ORDER BY messages.created_at DESC
       $query = Message::with('user')->orderBy('created_at', 'desc');

       // Filter by status
       if ($request->filled('status')) {
           // WHERE status = ?
           $query->where('status', $request->status);
       }

       // Filter by template type
       if ($request->filled('template_type')) {
           // WHERE template_type = ?
           $query->where('template_type', $request->template_type);
       }

       // Search by name, email, or subject
       if ($request->filled('search')) {
           $search = $request->search;
           // WHERE (name LIKE ? OR email LIKE ? OR subject LIKE ?)
           $query->where(function($q) use ($search) {
               $q->where('name', 'like', "%{$search}%")
                 ->orWhere('email', 'like', "%{$search}%")
                 ->orWhere('subject', 'like', "%{$search}%");
           });
       }

       // LIMIT 20 OFFSET ?
       $messages = $query->paginate(20);

       return view('admin.messages.index', compact('messages'));
   }

   /**
    * Show specific message
    */
   public function show(Message $message)
   {
       // Mark as read when viewed
       if ($message->status === 'unread') {
           // UPDATE messages SET status = 'read', updated_at = ? WHERE id = ?
           $message->markAsRead();
       }

       return view('admin.messages.show', compact('message'));
   }

   /**
    * Update message status (for AJAX requests)
    */
   public function updateStatus(Request $request, Message $message)
   {
       $request->validate([
           'status' => 'required|in:unread,read,replied'
       ]);

       try {
           // UPDATE messages SET status = ?, updated_at = ? WHERE id = ?
           $message->update(['status' => $request->status]);
           
           $statusMessages = [
               'read' => 'Pesan berhasil ditandai sebagai sudah dibaca.',
               'replied' => 'Pesan berhasil ditandai sebagai sudah dibalas.',
               'unread' => 'Pesan berhasil ditandai sebagai belum dibaca.'
           ];

           // Check if request expects JSON (AJAX)
           if ($request->expectsJson()) {
               return response()->json([
                   'success' => true,
                   'message' => $statusMessages[$request->status] ?? 'Status berhasil diperbarui.'
               ]);
           }

           // Regular form submission
           return redirect()->back()->with('success', $statusMessages[$request->status] ?? 'Status berhasil diperbarui.');

       } catch (\Exception $e) {
           if ($request->expectsJson()) {
               return response()->json([
                   'success' => false,
                   'message' => 'Terjadi kesalahan saat memperbarui status pesan.'
               ], 500);
           }

           return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui status pesan.');
       }
   }

   /**
    * Delete message
    */
   public function destroy(Message $message)
   {
       try {
           // DELETE FROM messages WHERE id = ?
           $message->delete();
           return redirect()->back()->with('success', 'Pesan berhasil dihapus.');
       } catch (\Exception $e) {
           return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus pesan.');
       }
   }
}