<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Checkout;
use App\Models\Course;
use App\Models\University;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'jumlah_course' => Course::count(),
            'jumlah_career' => Career::count(),
            'jumlah_degree' => University::count()
        ];

        return view('admin.dashboard', compact('data'));
    }
}
