<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id())
        {
            $user_type=Auth()->user()->user_type;

            if ($user_type == 'user')
            {
                return view('pages.index');
            }

            if ($user_type == 'admin')
            {
                return view('admin.index');
            }
        }
    }
}
