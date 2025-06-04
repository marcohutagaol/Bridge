<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class MyLearningController extends Controller
{
    public function index()
    {
        // Mengambil semua checkout milik user dengan loading relasi yang sesuai
        $checkouts = Checkout::where('user_id', Auth::id())
                            ->orderBy('created_at', 'desc')
                            ->get();
        
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

        return view('pages.mylearning', compact('checkouts'));
    }
}