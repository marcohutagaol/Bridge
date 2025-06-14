<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utbk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UtbkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil parameter filter dari request, default "Semua"
        $kategori_filter = $request->get('kategori', 'Semua');

        // Query dasar ambil data dari model Utbk
        $query = Utbk::query(); // SELECT * FROM utbk

        // Filter berdasarkan kategori jika tidak "Semua"
        if ($kategori_filter && $kategori_filter !== 'Semua') {
            $query->where('kategori', $kategori_filter); // SELECT * FROM utbk WHERE kategori = ?
        }

        // Ambil data soal dengan pagination (100 per halaman)
        $utbk = $query->paginate(100); // SELECT * FROM utbk [WHERE kategori = ?] LIMIT 100 OFFSET ?

        // Ambil daftar kategori unik untuk dropdown filter
        $kategori_list = Utbk::select('kategori')->distinct()->orderBy('kategori')->get();
        // SELECT DISTINCT kategori FROM utbk ORDER BY kategori

        // Ambil subkategori unik berdasarkan filter kategori
        if ($kategori_filter && $kategori_filter !== 'Semua') {
            $sub_kategori_unik = Utbk::where('kategori', $kategori_filter)
                ->select('sub_kategori', 'kategori', 'gambar')
                ->distinct()
                ->get();
            // SELECT DISTINCT sub_kategori, kategori, gambar FROM utbk WHERE kategori = ?
        } else {
            $sub_kategori_unik = Utbk::select('sub_kategori', 'kategori', 'gambar')
                ->distinct()
                ->get();
            // SELECT DISTINCT sub_kategori, kategori, gambar FROM utbk
        }

        // Ambil data berdasarkan subkategori masing-masing
        // SELECT * FROM utbk WHERE sub_kategori = 'Pengantar Penalaran Induktif dan Deduktif'
        $ppid = DB::table('utbk')->where('sub_kategori', 'Pengantar Penalaran Induktif dan Deduktif')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Penalaran Deduktif'
        $pd = DB::table('utbk')->where('sub_kategori', 'Penalaran Deduktif')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Penalaran Induktif'
        $pi = DB::table('utbk')->where('sub_kategori', 'Penalaran Induktif')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Penalaran Kuantitatif'
        $pk = DB::table('utbk')->where('sub_kategori', 'Penalaran Kuantitatif')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Membaca Teks'
        $mt = DB::table('utbk')->where('sub_kategori', 'Membaca Teks')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Ejaan'
        $eja = DB::table('utbk')->where('sub_kategori', 'Ejaan')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Kata dan Pembentukannya'
        $kata = DB::table('utbk')->where('sub_kategori', 'Kata dan Pembentukannya')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Kalimat'
        $kalimat = DB::table('utbk')->where('sub_kategori', 'Kalimat')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Diksi dan Makna Kata'
        $diksi = DB::table('utbk')->where('sub_kategori', 'Diksi dan Makna Kata')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Literasi Bahasa Indonesia'
        $lbi = DB::table('utbk')->where('sub_kategori', 'Literasi Bahasa Indonesia')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Get to Know All the Basics'
        $basic = DB::table('utbk')->where('sub_kategori', 'Get to Know All the Basics')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'English Level 1'
        $eng1 = DB::table('utbk')->where('sub_kategori', 'English Level 1')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'English Level 2'
        $eng2 = DB::table('utbk')->where('sub_kategori', 'English Level 2')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'English Level 3'
        $eng3 = DB::table('utbk')->where('sub_kategori', 'English Level 3')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Logika Matematika'
        $lm = DB::table('utbk')->where('sub_kategori', 'Logika Matematika')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Bilangan'
        $bil = DB::table('utbk')->where('sub_kategori', 'Bilangan')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Aljabar 1'
        $alj = DB::table('utbk')->where('sub_kategori', 'Aljabar 1')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Geometri 1'
        $geo = DB::table('utbk')->where('sub_kategori', 'Geometri 1')->get();
        // SELECT * FROM utbk WHERE sub_kategori = 'Data dan Ketidakpastian 1'
        $data = DB::table('utbk')->where('sub_kategori', 'Data dan Ketidakpastian 1')->get();

        // Kirim data ke view
        return view('pages.section1.topic_detail', compact(
            'utbk',
            'sub_kategori_unik',
            'kategori_list',
            'kategori_filter',
            'ppid',
            'pd',
            'pi',
            'pk',
            'mt',
            'eja',
            'kata',
            'kalimat',
            'diksi',
            'lbi',
            'basic',
            'eng1',
            'eng2',
            'eng3',
            'lm',
            'bil',
            'alj',
            'geo',
            'data'
        ));
    }

    public function submitJawaban(Request $request)
    {
        // Validasi bahwa setiap jawaban harus ada dan maksimal 1000 karakter
        $request->validate([
            'jawaban' => 'required|array',
            'jawaban.*' => 'required|string|max:1000',
        ]);

        // Simpan jawaban user ke tabel jawaban_utbk
        foreach ($request->jawaban as $id_soal => $jawaban) {

            // Ambil soal berdasarkan ID untuk mengambil kategori dan sub_kategori
            // SELECT * FROM utbk WHERE id = ?
            $soal = DB::table('utbk')->where('id', $id_soal)->first();

            // Jika soal ditemukan, insert ke tabel jawaban_utbk
            if ($soal) {
                // INSERT INTO jawaban_utbk (...)
                DB::table('jawaban_utbk')->insert([
                    'user_id' => Auth::id(), // Ambil user_id dari session
                    'name' => Auth::user()->name, // Ambil nama user dari session
                    'soal_id' => $id_soal,
                    'kategori' => $soal->kategori,
                    'sub_kategori' => $soal->sub_kategori,
                    'jawaban' => $jawaban,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Redirect kembali dengan pesan sukses
        return back()->with('success', 'Semua jawaban berhasil dikirim!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tidak digunakan
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Tidak digunakan
    }

    /**
     * Display the specified resource.
     */
    public function show($sub_kategori)
    {
        // Ambil 5 soal pertama berdasarkan subkategori dan urutan nomor
        // SELECT * FROM utbk WHERE sub_kategori = ? ORDER BY nomor LIMIT 5
        $materi = Utbk::where('sub_kategori', $sub_kategori)
            ->orderBy('nomor')
            ->limit(5)
            ->get();

        // Kirim ke view materi_detail
        return view('pages.section1.materi_detail', compact('materi', 'sub_kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Tidak digunakan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Tidak digunakan
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Tidak digunakan
    }
}
