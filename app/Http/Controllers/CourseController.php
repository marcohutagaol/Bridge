<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        // Filter kategori jika ada
        if ($request->has('kategori')) {
            $kategori = $request->input('kategori');
            foreach ($kategori as $k) {
                $query->where('kategori', 'LIKE', "%{$k}%");
            }
        }

        // Filter keyword jika ada
        if ($request->has('keyword')) {
            $keyword = $request->input('keyword');
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%")
                  ->orWhere('description', 'like', "%{$keyword}%");
            });
        }

        $courses = $query->get();

        $wishlistIds = [];
        if (auth()->check()) {
            $wishlistIds = auth()->user()->wishlists()
                ->where('wishlistable_type', Course::class)
                ->pluck('wishlistable_id')
                ->toArray();
        }

        return view('pages.detail.certificate_detail', [
            'courses' => $courses,
            'wishlistIds' => $wishlistIds,
            'message' => $courses->isEmpty() ? 'No courses found' : null
        ]);
    }

   public function show($id)
   {
       // SELECT * FROM courses_certificates WHERE id = ? LIMIT 1
       $course = Course::findOrFail($id);

       return view('pages.detail.certificate_show', [
           'course' => $course
       ]);
   }

   public function checkout($id)
   {
       // SELECT * FROM courses_certificates WHERE id = ? LIMIT 1
       $course = Course::findOrFail($id);

       return view('pages.detail.checkout', [
           'course' => $course
       ]);
   }

   /**
    * Proses checkout (untuk form POST)
    */
   public function processCheckout(Request $request, $id)
   {
       // SELECT * FROM courses_certificates WHERE id = ? LIMIT 1
       $course = Course::findOrFail($id);

       // Validasi data form
       $validated = $request->validate([
           'payment_method' => 'required',
           'terms' => 'accepted'
       ]);

       // Di sini Anda bisa menambahkan logika:
       // - Penyimpanan ke database
       // - Integrasi payment gateway
       // - dll

       // Redirect ke halaman sukses
       return redirect()->route('checkout.success', ['id' => $id])
           ->with('success', 'Pembelian berhasil diproses!');
   }

   /**
    * Halaman sukses checkout
    */
   public function checkoutSuccess($id)
   {
       // SELECT * FROM courses_certificates WHERE id = ? LIMIT 1
       $course = Course::findOrFail($id);

       return view('pages.detail.checkout_success', [
           'course' => $course
       ]);
   }

   public function admin()
   {
       // SELECT * FROM courses_certificates LIMIT 10 OFFSET ?
       $courses = Course::paginate(10);
       return view('admin.course', compact('courses'));
   }
}