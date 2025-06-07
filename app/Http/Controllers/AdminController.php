<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Checkout;
use App\Models\Course;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user_type = Auth()->user()->user_type;

            if ($user_type == 'user') {
                return view('pages.index');
            }

            if ($user_type == 'admin') {
                return view('admin.dashboard');
            }
        }
    }

    public function users(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $users = User::where('user_type', 'user')->paginate($perPage)->appends($request->query());;

        return view('admin.list.userlist', compact('users'));
    }

    public function careers(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $careers = Career::paginate($perPage)->appends($request->query());;

        return view('admin.list.career_list', compact('careers'));
    }

    public function degrees(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $degrees = University::paginate($perPage)->appends($request->query());;

        return view('admin.list.degree_list', compact('degrees'));
    }

    public function courses(Request $request)
    {
        $perPage = $request->input('per_page', 250);
        $courses = Course::paginate($perPage)->appends($request->query());;

        return view('admin.list.course_list', compact('courses'));
    }
}
