<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function showCareers(Request $request)
    {
        $category = $request->get('category', 'all');
        
        $query = Career::query();
        
        if ($category !== 'all') {
            $query->where('kategoris', $category);
        }
        
        $careers = $query->paginate(12)->withQueryString();
        
        $categories = Career::distinct()->pluck('kategoris')->toArray();
        
        return view('pages.detail.exam_detail', compact('careers', 'categories', 'category'));
    }

        public function show($id)
    {
        $career = Career::findOrFail($id);

        return view('pages.detail.career_show', [
            'career' => $career
        ]);
    }
}