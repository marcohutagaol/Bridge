<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Checkout;
use App\Models\Course;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function ranking()
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

        $topUsers_labels = $topUsers->map(fn($item) => $item->user->name);
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

        return view('admin.ranking_chart', [
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

    public function product()
    {
        $careerInsight = Career::select('careers.kategoris', DB::raw('COUNT(checkouts.id) as total'))
            ->leftJoin('checkouts', function ($join) {
                $join->on('careers.id', '=', 'checkouts.item_id')
                    ->where('checkouts.item_type', 'career');
            })
            ->groupBy('careers.kategoris')
            ->orderByDesc('total')
            ->get();

        $careerCategory = $careerInsight->pluck('kategoris');
        $career = $careerInsight->pluck('total');


        $degreeInsight = University::select('universities.tipe', DB::raw('COUNT(checkouts.id) as total'))
            ->leftJoin('checkouts', function ($join) {
                $join->on('universities.id', '=', 'checkouts.item_id')
                    ->where('checkouts.item_type', 'module');
            })
            ->groupBy('universities.tipe')
            ->orderByDesc('total')
            ->get();

        $degreeCategory = $degreeInsight->pluck('tipe');
        $degree = $degreeInsight->pluck('total');


        $courseInsight = Course::select('courses_certificates.kategori', DB::raw('COUNT(checkouts.id) as total'))
            ->leftJoin('checkouts', function ($join) {
                $join->on('courses_certificates.id', '=', 'checkouts.item_id')
                    ->where('checkouts.item_type', 'course');
            })
            ->groupBy('courses_certificates.kategori')
            ->orderByDesc('total')
            ->get();

        $courseCategory = $courseInsight->pluck('kategori');
        $course = $courseInsight->pluck('total');

        return view('admin.product_chart', [
            'careerCategory' => $careerCategory,
            'career' => $career,
            'degreeCategory' => $degreeCategory,
            'degree' => $degree,
            'courseCategory' => $courseCategory,
            'course' => $course,
        ]);
    }
}
