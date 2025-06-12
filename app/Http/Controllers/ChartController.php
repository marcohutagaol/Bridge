<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Checkout;
use App\Models\Course;
use App\Models\University;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function ranking()
    {
        $checkouts = [
            'pembelian_course' => Checkout::where('item_type', 'course')->count(),
            // SELECT COUNT(*) FROM checkouts WHERE item_type = 'course';
            'pembelian_career' => Checkout::where('item_type', 'career')->count(),
            // SELECT COUNT(*) FROM checkouts WHERE item_type = 'career';
            'pembelian_degree' => Checkout::where('item_type', 'module')->count()
            // SELECT COUNT(*) FROM checkouts WHERE item_type = 'module';
        ];

        $topUsers = Checkout::select('user_id', DB::raw('COUNT(*) as total'))
            ->with('user')
            ->groupBy('user_id')
            ->orderByDesc('total')
            ->limit(4)
            ->get();
            // SELECT user_id, COUNT(*) AS total
            // FROM checkouts
            // GROUP BY user_id
            // ORDER BY total DESC
            // LIMIT 4;

        $topUsers_labels = $topUsers->map(fn($item) => $item->user->name);
        $topUsers_data = $topUsers->map(fn($item) => $item->total);

        $course_rating = [
            'first' => Course::whereBetween('rating', [4.7, 5.0])->count(),
            // SELECT COUNT(*) FROM courses WHERE rating BETWEEN 4.7 AND 5.0;
            'second' => Course::whereBetween('rating', [4.4, 4.6])->count(),
            // SELECT COUNT(*) FROM courses WHERE rating BETWEEN 4.4 AND 4.6;
            'third' => Course::whereBetween('rating', [4.1, 4.3])->count(),
            // SELECT COUNT(*) FROM courses WHERE rating BETWEEN 4.1 AND 4.3;
            'fourth' => Course::whereBetween('rating', [3.0, 4.0])->count(),
            // SELECT COUNT(*) FROM courses WHERE rating BETWEEN 3.0 AND 4.0;
            'fifth' => Course::whereBetween('rating', [0.5, 2.0])->count(),
            // SELECT COUNT(*) FROM courses WHERE rating BETWEEN 0.5 AND 2.0;
        ];

        $highestSalary = Career::orderByDesc('median_salary')->first();
        // SELECT * FROM careers
        // ORDER BY median_salary DESC
        // LIMIT 1;
        $mostJobs = Career::orderByDesc('jobs_available')->first();
        // SELECT * FROM careers
        // ORDER BY jobs_available DESC
        // LIMIT 1;

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
            // SELECT careers.kategoris, COUNT(checkouts.id) AS total
            // FROM careers
            // LEFT JOIN checkouts
            // ON careers.id = checkouts.item_id AND checkouts.item_type = 'career'
            // GROUP BY careers.kategoris
            // ORDER BY total DESC;

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
            // SELECT universities.tipe, COUNT(checkouts.id) AS total
            // FROM universities
            // LEFT JOIN checkouts 
            //   ON universities.id = checkouts.item_id AND checkouts.item_type = 'module'
            // GROUP BY universities.tipe
            // ORDER BY total DESC;

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
            // SELECT courses_certificates.kategori, COUNT(checkouts.id) AS total
            // FROM courses_certificates
            // LEFT JOIN checkouts 
            // ON courses_certificates.id = checkouts.item_id 
            // AND checkouts.item_type = 'course'
            // GROUP BY courses_certificates.kategori
            // ORDER BY total DESC;

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
