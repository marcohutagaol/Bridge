<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universitas = DB::table('data_kampus')->where('tipe', 'universitas')->get();
        $institut = DB::table('data_kampus')->where('tipe', 'institut')->get();
        $politeknik = DB::table('data_kampus')->where('tipe', 'politeknik')->get();
        
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
        $universitas = DB::table('data_kampus')->where('id', $id)->get();
        $deskripsi = DB::table('visimisi_kampus')->where('id', $id)->get();
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
