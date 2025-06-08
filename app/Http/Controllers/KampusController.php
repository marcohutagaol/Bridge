<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use App\Models\VisiMisiKampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $search = $request->input('kampus_name');

    $universitas = Kampus::query()
        ->where('tipe', 'universitas')
        ->when($search, function ($query) use ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })
        ->get();

    $institut = Kampus::query()
        ->where('tipe', 'institut')
        ->when($search, function ($query) use ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })
        ->get();

    $politeknik = Kampus::query()
        ->where('tipe', 'politeknik')
        ->when($search, function ($query) use ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })
        ->get();

    return view('section2.direktori_kampus', compact('universitas', 'institut', 'politeknik'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $universitas = Kampus::where('id', $id)->get();
        // SELECT * FROM data_kampus WHERE id = '$id';
        $deskripsi = VisiMisiKampus::where('kampus_id', $id)->get();
        // SELECT * FROM visimisi_kampus WHERE id = '$id';
        return view('section2.detail_kampus', compact('universitas', 'deskripsi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
