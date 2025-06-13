<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        // SQL: SELECT 
        //   CASE 
        //     WHEN nilai >= 90 THEN "Excellent (90-100)"
        //     WHEN nilai >= 80 THEN "Good (80-89)"
        //     WHEN nilai >= 70 THEN "Average (70-79)"
        //     WHEN nilai >= 60 THEN "Below Average (60-69)"
        //     ELSE "Poor (0-59)"
        //   END AS grade_range,
        //   COUNT(*) AS total
        // FROM learning_progress
        // WHERE nilai IS NOT NULL AND progress = 'done'
        // GROUP BY grade_range;

        // Ambil statistik nilai berdasarkan range
        $nilaiStats = DB::table('learning_progress')
            ->whereNotNull('nilai')
            ->where('progress', 'done') // Hanya yang sudah selesai
            ->selectRaw('
                CASE 
                    WHEN nilai >= 90 THEN "Excellent (90-100)"
                    WHEN nilai >= 80 THEN "Good (80-89)"
                    WHEN nilai >= 70 THEN "Average (70-79)"
                    WHEN nilai >= 60 THEN "Below Average (60-69)"
                    ELSE "Poor (0-59)"
                END as grade_range,
                COUNT(*) as total
            ')
            ->groupBy('grade_range')
            ->get()
            ->keyBy('grade_range');

        // Inisialisasi data dengan nilai default 0 jika tidak ada di hasil query
        $gradeStats = [
            'Excellent (90-100)' => $nilaiStats->get('Excellent (90-100)')->total ?? 0,
            'Good (80-89)' => $nilaiStats->get('Good (80-89)')->total ?? 0,
            'Average (70-79)' => $nilaiStats->get('Average (70-79)')->total ?? 0,
            'Below Average (60-69)' => $nilaiStats->get('Below Average (60-69)')->total ?? 0,
            'Poor (0-59)' => $nilaiStats->get('Poor (0-59)')->total ?? 0
        ];

        // Hitung total peserta yang menyelesaikan pembelajaran
        $totalCompleted = array_sum($gradeStats);

        // SQL: SELECT AVG(nilai) FROM learning_progress WHERE nilai IS NOT NULL AND progress = 'done';
        $averageScore = DB::table('learning_progress')
            ->whereNotNull('nilai')
            ->where('progress', 'done')
            ->avg('nilai');

        // SQL: SELECT MAX(nilai) FROM learning_progress WHERE nilai IS NOT NULL AND progress = 'done';
        $highestScore = DB::table('learning_progress')
            ->whereNotNull('nilai')
            ->where('progress', 'done')
            ->max('nilai');

        // SQL: SELECT MIN(nilai) FROM learning_progress WHERE nilai IS NOT NULL AND progress = 'done';
        $lowestScore = DB::table('learning_progress')
            ->whereNotNull('nilai')
            ->where('progress', 'done')
            ->min('nilai');

        // SQL: SELECT FLOOR(nilai/10)*10 AS score_range, COUNT(*) AS count 
        // FROM learning_progress 
        // WHERE nilai IS NOT NULL AND progress = 'done' 
        // GROUP BY score_range 
        // ORDER BY score_range;

        // Ambil distribusi nilai untuk line chart
        $scoreDistribution = DB::table('learning_progress')
            ->whereNotNull('nilai')
            ->where('progress', 'done')
            ->selectRaw('
                FLOOR(nilai/10)*10 as score_range,
                COUNT(*) as count
            ')
            ->groupBy('score_range')
            ->orderBy('score_range')
            ->get();

        // Kirim semua data ke view
        return view('admin.progress.nilai', compact(
            'gradeStats', 
            'totalCompleted', 
            'averageScore', 
            'highestScore', 
            'lowestScore',
            'scoreDistribution'
        ));
    }
}
