<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
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
                return view('admin.index');
            }
        }
    }

    public function degreePayment()
    {
        $checkouts = Checkout::with('module')
            ->where('item_type', 'module')
            ->paginate(10);
        return view('admin.degree', compact('checkouts'));
    }
    public function careerPayment()
    {
        $checkouts = Checkout::with('career')
            ->where('item_type', 'career')
            ->paginate(10);
        return view('admin.career', compact('checkouts'));
    }
    public function coursePayment()
    {
        $checkouts = Checkout::with(['course', 'user'])
            ->where('item_type', 'course')
            ->paginate(10);
        return view('admin.course', compact('checkouts'));
    }


}
