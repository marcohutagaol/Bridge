<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LearningProgress; // Make sure you have this model

class LearningProgressController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|string|max:20',
            'progress' => 'required|in:none,in_progress,done',
            'nilai' => 'nullable|integer|min:0|max:100', // Nilai is now from quiz
        ]);

        LearningProgress::updateOrCreate(
            ['order_id' => $request->order_id],
            ['progress' => $request->progress, 'nilai' => $request->nilai]
        );

        return response()->json(['message' => 'Progress saved successfully.']);
    }
}