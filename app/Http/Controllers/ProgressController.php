<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    public function index()
    {
        /**
         * Ambil statistik progress dari tabel learning_progress.
         * 
         * SQL ekuivalen:
         * SELECT progress, COUNT(*) as total
         * FROM learning_progress
         * GROUP BY progress;
         */
        $progressStats = DB::table('learning_progress')
            ->select('progress', DB::raw('count(*) as total'))
            ->groupBy('progress')
            ->get()
            ->keyBy('progress'); // Mengindeks hasil berdasarkan nilai 'progress'

        /**
         * Inisialisasi statistik dengan nilai default 0
         * jika tidak ada data untuk kategori tertentu.
         */
        $stats = [
            'none' => $progressStats->get('none')->total ?? 0,
            'in_progress' => $progressStats->get('in_progress')->total ?? 0,
            'done' => $progressStats->get('done')->total ?? 0
        ];

        /**
         * Hitung total pengguna berdasarkan seluruh status progress.
         */
        $totalUsers = array_sum($stats);

        // Kirim data ke view
        return view('admin.progress.progres', compact('stats', 'totalUsers'));
    }
}
