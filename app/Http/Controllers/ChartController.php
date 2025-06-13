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
           // SELECT COUNT(*) FROM checkouts WHERE item_type = 'course'
           'pembelian_course' => Checkout::where('item_type', 'course')->count(),
           // SELECT COUNT(*) FROM checkouts WHERE item_type = 'career'
           'pembelian_career' => Checkout::where('item_type', 'career')->count(),
           // SELECT COUNT(*) FROM checkouts WHERE item_type = 'module'
           'pembelian_degree' => Checkout::where('item_type', 'module')->count()
       ];

       // SELECT user_id, COUNT(*) as total FROM checkouts GROUP BY user_id ORDER BY total DESC LIMIT 4
       $topUsers = Checkout::select('user_id', DB::raw('COUNT(*) as total'))
           ->with('user')
           ->groupBy('user_id')
           ->orderByDesc('total')
           ->limit(4)
           ->get();

       $topUsers_labels = $topUsers->map(fn($item) => $item->user->name);
       $topUsers_data = $topUsers->map(fn($item) => $item->total);

       $course_rating = [
           // SELECT COUNT(*) FROM courses_certificates WHERE rating BETWEEN 4.7 AND 5.0
           'first' => Course::whereBetween('rating', [4.7, 5.0])->count(),
           // SELECT COUNT(*) FROM courses_certificates WHERE rating BETWEEN 4.4 AND 4.6
           'second' => Course::whereBetween('rating', [4.4, 4.6])->count(),
           // SELECT COUNT(*) FROM courses_certificates WHERE rating BETWEEN 4.1 AND 4.3
           'third' => Course::whereBetween('rating', [4.1, 4.3])->count(),
           // SELECT COUNT(*) FROM courses_certificates WHERE rating BETWEEN 3.0 AND 4.0
           'fourth' => Course::whereBetween('rating', [3.0, 4.0])->count(),
           // SELECT COUNT(*) FROM courses_certificates WHERE rating BETWEEN 0.5 AND 2.0
           'fifth' => Course::whereBetween('rating', [0.5, 2.0])->count(),
       ];

       // SELECT * FROM careers ORDER BY median_salary DESC LIMIT 1
       $highestSalary = Career::orderByDesc('median_salary')->first();
       // SELECT * FROM careers ORDER BY jobs_available DESC LIMIT 1
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
       // SELECT careers.kategoris, COUNT(checkouts.id) as total FROM careers LEFT JOIN checkouts ON careers.id = checkouts.item_id AND checkouts.item_type = 'career' GROUP BY careers.kategoris ORDER BY total DESC
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

       // SELECT universities.tipe, COUNT(checkouts.id) as total FROM universities LEFT JOIN checkouts ON universities.id = checkouts.item_id AND checkouts.item_type = 'module' GROUP BY universities.tipe ORDER BY total DESC
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

       // SELECT courses_certificates.kategori, COUNT(checkouts.id) as total FROM courses_certificates LEFT JOIN checkouts ON courses_certificates.id = checkouts.item_id AND checkouts.item_type = 'course' GROUP BY courses_certificates.kategori ORDER BY total DESC
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