<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('user_type', 'user')->get();
        return view('admin.userlist', compact('users'));
    }
}
