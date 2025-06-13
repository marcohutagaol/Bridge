<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LearningProgress; // Make sure you have this model

class LearningProgressController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input dari form / API request
        $request->validate([
            'order_id' => 'required|string|max:20',
            'progress' => 'required|in:none,in_progress,done',
            'nilai' => 'nullable|integer|min:0|max:100', // Nilai dari quiz, opsional
        ]);

        // SQL approximation:
        // INSERT INTO learning_progresses (order_id, progress, nilai) 
        // VALUES (?, ?, ?)
        // ON DUPLICATE KEY UPDATE progress = ?, nilai = ?;

        // Jika ada entri dengan order_id yang sama, update field progress dan nilai.
        LearningProgress::updateOrCreate(
            ['order_id' => $request->order_id],
            ['progress' => $request->progress, 'nilai' => $request->nilai]
        );

        return response()->json(['message' => 'Progress saved successfully.']);
    }
}
