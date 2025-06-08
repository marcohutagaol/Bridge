<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    public function index()
    {
        // Ambil statistik progress
        $progressStats = DB::table('learning_progress')
            ->select('progress', DB::raw('count(*) as total'))
            ->groupBy('progress')
            ->get()
            ->keyBy('progress');

        // Inisialisasi data dengan nilai default 0
        $stats = [
            'none' => $progressStats->get('none')->total ?? 0,
            'in_progress' => $progressStats->get('in_progress')->total ?? 0,
            'done' => $progressStats->get('done')->total ?? 0
        ];

        // Hitung total user
        $totalUsers = array_sum($stats);
        return view('admin.progress.progres', compact('stats', 'totalUsers'));
        
    }
}