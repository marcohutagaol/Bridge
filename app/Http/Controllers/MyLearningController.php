<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class MyLearningController extends Controller
{
    public function index()
    {
        // SQL: SELECT * FROM checkouts WHERE user_id = ? ORDER BY created_at DESC;
        // Mengambil semua checkout milik user dengan loading relasi yang sesuai
        $checkouts = Checkout::where('user_id', Auth::id())
                            ->orderBy('created_at', 'desc')
                            ->get();
        
        // SQL: Untuk setiap $checkout, akan terjadi query tambahan tergantung pada item_type
        // Contoh jika item_type = 'course':
        //     SELECT * FROM courses WHERE courses.id = ?
        // Jika item_type = 'career':
        //     SELECT * FROM careers WHERE careers.id = ?
        // Jika item_type = 'module':
        //     SELECT * FROM modules WHERE modules.id = ?
        // Load relasi berdasarkan item_type untuk setiap checkout
        $checkouts->each(function ($checkout) {
            switch ($checkout->item_type) {
                case 'course':
                    $checkout->load('course');
                    break;
                case 'career':
                    $checkout->load('career');
                    break;
                case 'module':
                    $checkout->load('module');
                    break;
            }
        });

        // Mengirim data ke view mylearning
        return view('pages.mylearning', compact('checkouts'));
    }
}
