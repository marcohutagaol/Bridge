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
            // SELECT COUNT(*) FROM courses;
            'jumlah_career' => Career::count(),
            // SELECT COUNT(*) FROM careers;
            'jumlah_degree' => University::count()
            // SELECT COUNT(*) FROM universities;
        ];

        return view('admin.dashboard', compact('data'));
    }
}
