<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearningController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // SQL: SELECT * FROM checkouts WHERE user_id = '$user->id';
        // Lalu: SELECT * FROM courses WHERE id IN (course_id dari checkouts)
        // (dengan eager loading relasi 'course')
        $checkouts = $user->checkouts()->with('course')->get();

        return view('pages.mylearning', compact('checkouts'));
    }
}
