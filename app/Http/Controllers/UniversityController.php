<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Subject;
use App\Models\Wishlist;

class UniversityController extends Controller
{
    public function index(Request $request)
    {
        $query = University::query();

        // Filter berdasarkan keyword pencarian
        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            // SQL: SELECT * FROM universities WHERE name LIKE '%keyword%'
            $query->where('name', 'like', '%' . $keyword . '%');
        }

        // Filter berdasarkan tipe
        if ($request->filled('tipe')) {
            // SQL: SELECT * FROM universities WHERE tipe = ?
            $query->where('tipe', $request->input('tipe'));
        }

        // Filter berdasarkan subjects
        if ($request->has('subjects')) {
            $selectedSubjects = $request->input('subjects');
            // SQL: SELECT * FROM universities 
            // JOIN university_subject ON university_id 
            // WHERE subject.name IN (…)
            $query->whereHas('subjects', function ($q) use ($selectedSubjects) {
                $q->whereIn('name', $selectedSubjects);
            });
        }

        // SQL: SELECT * FROM universities ORDER BY application_deadline LIMIT 8 OFFSET ?
        $universities = $query->orderBy('application_deadline')->paginate(8);
        $universities->appends($request->all());

        // SQL: SELECT * FROM universities WHERE row = ? ORDER BY ranking LIMIT 3
        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        $wishlistIds = [];
        if (auth()->check()) {
            // SQL: SELECT wishlistable_id FROM wishlists 
            // WHERE user_id = ? AND wishlistable_type = 'App\Models\University'
            $wishlistIds = auth()->user()->wishlists()
                ->where('wishlistable_type', University::class)
                ->pluck('wishlistable_id')
                ->toArray();
        }

        return view('pages.detail.module_detail', compact(
            'universities',
            'featuredUniversitiesRow1',
            'featuredUniversitiesRow2',
            'featuredUniversitiesRow3',
            'featuredUniversitiesRow4',
            'featuredUniversitiesRow5',
            'wishlistIds'
        ));
    }

    public function bachelor()
    {
        // SQL: SELECT * FROM universities WHERE tipe = 'bachelor' ORDER BY application_deadline LIMIT 8 OFFSET ?
        $universities = University::where('tipe', 'bachelor')
            ->orderBy('application_deadline')
            ->paginate(8);

        // SQL: SELECT * FROM universities WHERE row = ? ORDER BY ranking LIMIT 3
        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        $wishlistIds = [];
        if (auth()->check()) {
            // SQL: SELECT wishlistable_id FROM wishlists WHERE user_id = ? AND wishlistable_type = 'university'
            $wishlistIds = auth()->user()->wishlistedItems('university');
        }

        return view('pages.detail.filterby.bachelor', compact(
            'universities',
            'featuredUniversitiesRow1',
            'featuredUniversitiesRow2',
            'featuredUniversitiesRow3',
            'featuredUniversitiesRow4',
            'featuredUniversitiesRow5',
            'wishlistIds'
        ));
    }

    public function master()
    {
        // SQL: SELECT * FROM universities WHERE tipe = 'master' ORDER BY application_deadline LIMIT 8 OFFSET ?
        $universities = University::where('tipe', 'master')
            ->orderBy('application_deadline')
            ->paginate(8);

        // SQL: SELECT * FROM universities WHERE row = ? ORDER BY ranking LIMIT 3
        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        $wishlistIds = [];
        if (auth()->check()) {
            // SQL: SELECT wishlistable_id FROM wishlists WHERE user_id = ? AND wishlistable_type = 'university'
            $wishlistIds = auth()->user()->wishlistedItems('university');
        }

        return view('pages.detail.filterby.master', compact(
            'universities',
            'featuredUniversitiesRow1',
            'featuredUniversitiesRow2',
            'featuredUniversitiesRow3',
            'featuredUniversitiesRow4',
            'featuredUniversitiesRow5',
            'wishlistIds'
        ));
    }

    public function postgraduate()
    {
        // SQL: SELECT * FROM universities 
        // WHERE tipe IN ('postgraduate', 'diploma') 
        // ORDER BY application_deadline LIMIT 8 OFFSET ?
        $universities = University::whereIn('tipe', ['postgraduate', 'diploma'])
            ->orderBy('application_deadline')
            ->paginate(8);

        // SQL: SELECT * FROM universities WHERE row = ? ORDER BY ranking LIMIT 3
        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        $wishlistIds = [];
        if (auth()->check()) {
            // SQL: SELECT wishlistable_id FROM wishlists WHERE user_id = ? AND wishlistable_type = 'university'
            $wishlistIds = auth()->user()->wishlistedItems('university');
        }

        return view('pages.detail.filterby.postgraduate', compact(
            'universities',
            'featuredUniversitiesRow1',
            'featuredUniversitiesRow2',
            'featuredUniversitiesRow3',
            'featuredUniversitiesRow4',
            'featuredUniversitiesRow5',
            'wishlistIds'
        ));
    }

    public function show($id)
    {
        // SQL: SELECT * FROM universities LEFT JOIN university_subject ON university_id 
        // LEFT JOIN subjects ON subject_id WHERE universities.id = ?
        $university = University::with('subjects')->findOrFail($id);

        return view('pages.detail.module_show', [
            'university' => $university
        ]);
    }
}
