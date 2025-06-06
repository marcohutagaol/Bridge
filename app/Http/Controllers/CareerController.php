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

        // Tambahkan wishlistIds
        $wishlistIds = [];
        if (auth()->check()) {
            $wishlistIds = auth()->user()->wishlists()
                ->where('wishlistable_type', Career::class)
                ->pluck('wishlistable_id')
                ->toArray();
        }

        // Return dengan wishlistIds
        return view('pages.detail.exam_detail', compact('careers', 'categories', 'category', 'wishlistIds'));
    }

    public function show($id)
    {
        $career = Career::findOrFail($id);

        return view('pages.detail.career_show', [
            'career' => $career
        ]);
    }

    // Tetap simpan jika Anda ingin memanggil semua tanpa filter
    public function index()
    {
        $careers = Career::all();

        $wishlistIds = [];
        if (auth()->check()) {
            $wishlistIds = auth()->user()->wishlists()
                ->where('wishlistable_type', Career::class)
                ->pluck('wishlistable_id')
                ->toArray();
        }

        return view('pages.detail.exam', compact('careers', 'wishlistIds'));
    }
}
