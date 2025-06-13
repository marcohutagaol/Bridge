<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function showCareers(Request $request)
    {
        $category = $request->get('category', 'all');
        $keyword = $request->get('keyword');

        $query = Career::query();

        if ($category !== 'all') {
            $query->where('kategoris', $category);
        }

        if ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%")
                  ->orWhere('description', 'like', "%{$keyword}%")
                  ->orWhere('description2', 'like', "%{$keyword}%");
            });
        }

        $careers = $query->paginate(12)->withQueryString();
        $categories = Career::distinct()->pluck('kategoris')->toArray();

        $wishlistIds = [];
        if (auth()->check()) {
            $wishlistIds = auth()->user()->wishlists()
                ->where('wishlistable_type', Career::class)
                ->pluck('wishlistable_id')
                ->toArray();
        }

        return view('pages.detail.exam_detail', compact('careers', 'categories', 'category', 'wishlistIds', 'keyword'));
    }


   public function show($id)
   {
       // SELECT * FROM careers WHERE id = ? LIMIT 1
       $career = Career::findOrFail($id);

       return view('pages.detail.career_show', [
           'career' => $career
       ]);
   }

   // Tetap simpan jika Anda ingin memanggil semua tanpa filter
   public function index()
   {
       // SELECT * FROM careers
       $careers = Career::all();

       $wishlistIds = [];
       if (auth()->check()) {
           // SELECT wishlistable_id FROM wishlists WHERE user_id = ? AND wishlistable_type = 'App\Models\Career'
           $wishlistIds = auth()->user()->wishlists()
               ->where('wishlistable_type', Career::class)
               ->pluck('wishlistable_id')
               ->toArray();
       }

       return view('pages.detail.exam', compact('careers', 'wishlistIds'));
   }
}