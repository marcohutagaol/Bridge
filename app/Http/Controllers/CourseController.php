<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        if ($request->has('kategori')) {
            $kategori = $request->input('kategori');
            foreach ($kategori as $k) {
                $query->where('kategori', 'LIKE', "%{$k}%");
            }
        }

        if ($request->has('kategori')) {
            $kategori = $request->input('kategori');
            foreach ($kategori as $lang) {
                $query->where('kategori', 'LIKE', "%{$lang}%");
            }
        }

        if ($request->has('kategori')) {
            $kategori = $request->input('kategori');
            foreach ($kategori as $p) {
                $query->where('kategori', 'LIKE', "%{$p}%");
            }
        }

        $courses = $query->get();

        return view('pages.detail.certificate_detail', [
            'courses' => $courses,
            'message' => $courses->isEmpty() ? 'No courses found' : null
        ]);
    }
}