<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearningController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Ambil semua checkout user dan relasi course
        $checkouts = $user->checkouts()->with('course')->get();

        return view('pages.mylearning', compact('checkouts'));

    }
}
