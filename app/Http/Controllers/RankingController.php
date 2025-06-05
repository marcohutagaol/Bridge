<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Checkout;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function index()
    {
        $checkouts = [
            'pembelian_course' => Checkout::where('item_type', 'course')->count(),
            'pembelian_career' => Checkout::where('item_type', 'career')->count(),
            'pembelian_degree' => Checkout::where('item_type', 'module')->count()
        ];

        $topUsers = Checkout::select('user_id', DB::raw('COUNT(*) as total'))
            ->with('user')
            ->groupBy('user_id')
            ->orderByDesc('total')
            ->limit(4)
            ->get();

        $topUsers_labels = $topUsers->map(fn($item) => $item->user->name); // atau email jika tidak ada name
        $topUsers_data = $topUsers->map(fn($item) => $item->total);

        $course_rating = [
            'first' => Course::whereBetween('rating', [4.7, 5.0])->count(),
            'second' => Course::whereBetween('rating', [4.4, 4.6])->count(),
            'third' => Course::whereBetween('rating', [4.1, 4.3])->count(),
            'fourth' => Course::whereBetween('rating', [3.0, 4.0])->count(),
            'fifth' => Course::whereBetween('rating', [0.5, 2.0])->count(),
        ];


        $highestSalary = Career::orderByDesc('median_salary')->first();
        $mostJobs = Career::orderByDesc('jobs_available')->first();

        return view('admin.ranking', [
            'checkouts' => $checkouts,
            'topUsers_labels' => $topUsers_labels,
            'topUsers_data' => $topUsers_data,
            'course_rating' => $course_rating,
            'career_labels' => ['Highest Salary', 'Most Jobs Available'],
            'career_data' => [
                $highestSalary->median_salary,
                $mostJobs->jobs_available
            ],
        ]);
    }
}
