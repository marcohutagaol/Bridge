<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Career;
use Illuminate\Support\Facades\Auth;

class MyCareerController extends Controller
{
    public function index()
    {
        // SQL: SELECT * FROM checkouts WHERE user_id = ? AND item_type = 'career'
        //      AND EXISTS (SELECT * FROM careers WHERE careers.id = checkouts.career_id)
        //      ORDER BY created_at DESC;

        // Ambil semua data checkout milik user yang tipe-nya 'career'
        $checkouts = Checkout::where('user_id', Auth::id()) // Filter berdasarkan user login
            ->where('item_type', 'career') // Hanya ambil yang bertipe 'career'
            ->whereHas('career') // Pastikan relasi career ada (tidak null)
            ->with(['career' => function($query) {
                // Tambahan filter bisa dimasukkan di sini
                // SQL (opsional): AND careers.status = 'active'
                // $query->where('status', 'active');
            }])
            ->orderBy('created_at', 'desc') // Urutkan dari yang terbaru
            ->get();

        // Filter ulang pada level collection (tidak mempengaruhi query SQL)
        $checkouts = $checkouts->filter(function($checkout) {
            return $checkout->item_type === 'career' && $checkout->career !== null;
        });

        // Menampilkan data ke view
        return view('pages.mycareer', compact('checkouts'));
    }
}
