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

        // SQL:
        // SELECT * FROM kampus WHERE tipe = 'universitas'
        // [AND nama LIKE '%$search%']

        $institut = Kampus::query()
            ->where('tipe', 'institut')
            ->when($search, function ($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%');
            })
            ->get();

        // SQL:
        // SELECT * FROM kampus WHERE tipe = 'institut'
        // [AND nama LIKE '%$search%']

        $politeknik = Kampus::query()
            ->where('tipe', 'politeknik')
            ->when($search, function ($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%');
            })
            ->get();

        // SQL:
        // SELECT * FROM kampus WHERE tipe = 'politeknik'
        // [AND nama LIKE '%$search%']

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
        // SQL:
        // SELECT * FROM kampus WHERE id = '$id'

        $deskripsi = VisiMisiKampus::where('kampus_id', $id)->get();
        // SQL:
        // SELECT * FROM visi_misi_kampus WHERE kampus_id = '$id'

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
