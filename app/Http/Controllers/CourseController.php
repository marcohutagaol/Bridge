<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        // Filter kategori jika ada
        if ($request->has('kategori')) {
            $kategori = $request->input('kategori');
            foreach ($kategori as $k) {
                $query->where('kategori', 'LIKE', "%{$k}%");
            }
        }

        // Filter keyword jika ada
        if ($request->has('keyword')) {
            $keyword = $request->input('keyword');
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%")
                  ->orWhere('description', 'like', "%{$keyword}%");
            });
        }

        $courses = $query->get();

        // SQL Approximation:
        // SELECT * FROM courses
        // WHERE kategori LIKE '%kategori1%' AND ...
        //   AND (name LIKE '%keyword%' OR description LIKE '%keyword%');

        $wishlistIds = [];
        if (auth()->check()) {
            $wishlistIds = auth()->user()->wishlists()
                ->where('wishlistable_type', Course::class)
                ->pluck('wishlistable_id')
                ->toArray();
        }

        // SQL:
        // SELECT wishlistable_id FROM wishlists
        // WHERE user_id = [ID_USER]
        //   AND wishlistable_type = 'App\Models\Course';

        return view('pages.detail.certificate_detail', [
            'courses' => $courses,
            'wishlistIds' => $wishlistIds,
            'message' => $courses->isEmpty() ? 'No courses found' : null
        ]);
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);

        // SQL:
        // SELECT * FROM courses WHERE id = ? LIMIT 1;

        return view('pages.detail.certificate_show', [
            'course' => $course
        ]);
    }

    public function checkout($id)
    {
        $course = Course::findOrFail($id);

        // SQL:
        // SELECT * FROM courses WHERE id = ? LIMIT 1;

        return view('pages.detail.checkout', [
            'course' => $course
        ]);
    }

    public function processCheckout(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        // SQL:
        // SELECT * FROM courses WHERE id = ? LIMIT 1;

        $validated = $request->validate([
            'payment_method' => 'required',
            'terms' => 'accepted'
        ]);

        // [Contoh logika tambahan]
        // INSERT INTO orders (...) VALUES (...);

        return redirect()->route('checkout.success', ['id' => $id])
            ->with('success', 'Pembelian berhasil diproses!');
    }

    public function checkoutSuccess($id)
    {
        $course = Course::findOrFail($id);

        // SQL:
        // SELECT * FROM courses WHERE id = ? LIMIT 1;

        return view('pages.detail.checkout_success', [
            'course' => $course
        ]);
    }

    public function admin()
    {
        $courses = Course::paginate(10);

        // SQL:
        // SELECT * FROM courses LIMIT 10 OFFSET [halaman];

        return view('admin.course', compact('courses'));
    }
}
