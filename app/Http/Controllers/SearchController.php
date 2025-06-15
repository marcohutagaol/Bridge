<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Course;
use App\Models\University;

class SearchController extends Controller
{
    /**
     * Menangani pencarian global berdasarkan keyword.
     *
     * Alur pencarian:
     * - Cek apakah keyword cocok dengan salah satu data pada tabel Career.
     * - Jika tidak ada, cek di Course (sertifikat).
     * - Jika tidak ada, cek di University (modul).
     * - Jika tidak ada di ketiganya, kembalikan ke halaman sebelumnya dengan pesan error.
     *
     * SQL Ekuivalen:
     * SELECT * FROM careers WHERE name LIKE '%keyword%' LIMIT 1;
     * SELECT * FROM courses WHERE name LIKE '%keyword%' LIMIT 1;
     * SELECT * FROM universities WHERE name LIKE '%keyword%' LIMIT 1;
     */
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // 🔍 Cek pada tabel careers
        $career = Career::where('name', 'like', "%{$keyword}%")->first();
        if ($career) {
            return redirect()->route('careers', ['keyword' => $keyword]);
        }

        // 🔍 Cek pada tabel courses (sertifikat)
        $course = Course::where('name', 'like', "%{$keyword}%")->first();
        if ($course) {
            return redirect()->route('certificate', ['keyword' => $keyword]);
        }

        // 🔍 Cek pada tabel universities (modul)
        $university = University::where('name', 'like', "%{$keyword}%")->first();
        if ($university) {
            return redirect()->route('universities.index', ['keyword' => $keyword]);
        }

        // Jika tidak ditemukan di semua tabel
        return redirect()->back()->with('message', 'Data tidak ditemukan.');
    }
}
