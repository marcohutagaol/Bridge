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
            $query->where('name', 'like', '%' . $keyword . '%');
        }

        // Filter berdasarkan tipe
        if ($request->filled('tipe')) {
            $query->where('tipe', $request->input('tipe'));
        }

        // Filter berdasarkan subjects
        if ($request->has('subjects')) {
            $selectedSubjects = $request->input('subjects');
            $query->whereHas('subjects', function ($q) use ($selectedSubjects) {
                $q->whereIn('name', $selectedSubjects);
            });
        }

        $universities = $query->orderBy('application_deadline')->paginate(8);
        $universities->appends($request->all()); // agar pagination menyimpan filter

        // Featured rows tetap sama
        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        $wishlistIds = [];
        if (auth()->check()) {
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
        // SQL Query untuk Bachelor Universities:
        /*
        SELECT * FROM universities 
        WHERE tipe = 'bachelor' 
        ORDER BY application_deadline 
        LIMIT 8 OFFSET ?;
        */
        $universities = University::where('tipe', 'bachelor')
            ->orderBy('application_deadline')
            ->paginate(8);

        // SQL Query untuk Featured Universities Row 1:
        /*
        SELECT * FROM universities WHERE row = 1 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 2:
        /*
        SELECT * FROM universities WHERE row = 2 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 3:
        /*
        SELECT * FROM universities WHERE row = 3 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 4:
        /*
        SELECT * FROM universities WHERE row = 4 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 5:
        /*
        SELECT * FROM universities WHERE row = 5 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        $wishlistIds = [];
        if (auth()->check()) {
            // SQL Query untuk Wishlist (melalui User model method):
            /*
            SELECT wishlistable_id FROM wishlists 
            WHERE user_id = ? AND wishlistable_type = 'university';
            */
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
        // SQL Query untuk Master Universities:
        /*
        SELECT * FROM universities 
        WHERE tipe = 'master' 
        ORDER BY application_deadline 
        LIMIT 8 OFFSET ?;
        */
        $universities = University::where('tipe', 'master')
            ->orderBy('application_deadline')
            ->paginate(8);

        // SQL Query untuk Featured Universities Row 1:
        /*
        SELECT * FROM universities WHERE row = 1 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 2:
        /*
        SELECT * FROM universities WHERE row = 2 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 3:
        /*
        SELECT * FROM universities WHERE row = 3 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 4:
        /*
        SELECT * FROM universities WHERE row = 4 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 5:
        /*
        SELECT * FROM universities WHERE row = 5 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        $wishlistIds = [];
        if (auth()->check()) {
            // SQL Query untuk Wishlist (melalui User model method):
            /*
            SELECT wishlistable_id FROM wishlists 
            WHERE user_id = ? AND wishlistable_type = 'university';
            */
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
        // SQL Query untuk Postgraduate Universities:
        /*
        SELECT * FROM universities 
        WHERE tipe IN ('postgraduate', 'diploma') 
        ORDER BY application_deadline 
        LIMIT 8 OFFSET ?;
        */
        $universities = University::whereIn('tipe', ['postgraduate', 'diploma'])
            ->orderBy('application_deadline')
            ->paginate(8);

        // SQL Query untuk Featured Universities Row 1:
        /*
        SELECT * FROM universities WHERE row = 1 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 2:
        /*
        SELECT * FROM universities WHERE row = 2 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 3:
        /*
        SELECT * FROM universities WHERE row = 3 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 4:
        /*
        SELECT * FROM universities WHERE row = 4 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();

        // SQL Query untuk Featured Universities Row 5:
        /*
        SELECT * FROM universities WHERE row = 5 ORDER BY ranking LIMIT 3;
        */
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        $wishlistIds = [];
        if (auth()->check()) {
            // SQL Query untuk Wishlist (melalui User model method):
            /*
            SELECT wishlistable_id FROM wishlists 
            WHERE user_id = ? AND wishlistable_type = 'university';
            */
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
        // SQL Query untuk University dengan Subjects:
        /*
        SELECT universities.*, subjects.* 
        FROM universities 
        LEFT JOIN university_subjects ON universities.id = university_subjects.university_id 
        LEFT JOIN subjects ON university_subjects.subject_id = subjects.id 
        WHERE universities.id = ?;
        */
        $university = University::with('subjects')->findOrFail($id);

        return view('pages.detail.module_show', [
            'university' => $university
        ]);
    }
}