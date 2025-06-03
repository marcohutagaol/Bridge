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


    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('pages.detail.certificate_show', [
            'course' => $course
        ]);
    }

    public function checkout($id)
    {
        $course = Course::findOrFail($id);

        return view('pages.detail.checkout', [
            'course' => $course
        ]);
    }

    /**
     * Proses checkout (untuk form POST)
     */
    public function processCheckout(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        // Validasi data form
        $validated = $request->validate([
            'payment_method' => 'required',
            'terms' => 'accepted'
        ]);

        // Di sini Anda bisa menambahkan logika:
        // - Penyimpanan ke database
        // - Integrasi payment gateway
        // - dll

        // Redirect ke halaman sukses
        return redirect()->route('checkout.success', ['id' => $id])
            ->with('success', 'Pembelian berhasil diproses!');
    }

    /**
     * Halaman sukses checkout
     */
    public function checkoutSuccess($id)
    {
        $course = Course::findOrFail($id);

        return view('pages.detail.checkout_success', [
            'course' => $course
        ]);
    }


    public function admin()
    {
        $courses = Course::paginate(10);
        return view('admin.course', compact('courses'));
    }
}