<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Belum diimplementasikan
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Belum diimplementasikan
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Belum diimplementasikan
    }

    /**
     * Display the specified resource.
     */
    public function show($sub_kategori)
    {
        // Decode URL encoding (contoh: "penalaran%20umum" -> "penalaran umum")
        $sub_kategori = urldecode($sub_kategori);

        $materi = \App\Models\Utbk::where('sub_kategori', $sub_kategori)->get();
        // SQL Equivalent:
        // SELECT * FROM utbks WHERE sub_kategori = '$sub_kategori';

        // Kembalikan view dengan data materi dan nama sub_kategori
        return view('pages.section1.materi_detail', compact('materi', 'sub_kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Belum diimplementasikan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Belum diimplementasikan
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Belum diimplementasikan
    }
}
