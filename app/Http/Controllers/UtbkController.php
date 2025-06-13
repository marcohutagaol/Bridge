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
        // Ambil parameter filter dari request
        $kategori_filter = $request->get('kategori', 'Semua');

        // Query dasar
        $query = Utbk::query();

        // Aplikasikan filter jika bukan "Semua"
        if ($kategori_filter && $kategori_filter !== 'Semua') {
            $query->where('kategori', $kategori_filter);
        }

        // SQL Query untuk UTBK dengan filter kategori:
        /*
        Jika kategori_filter = 'Semua':
        SELECT * FROM utbk LIMIT 100 OFFSET ?;
        
        Jika kategori_filter != 'Semua':
        SELECT * FROM utbk WHERE kategori = ? LIMIT 100 OFFSET ?;
        */
        $utbk = $query->paginate(100);

        // SQL Query untuk mengambil kategori unik:
        /*
        SELECT DISTINCT kategori FROM utbk ORDER BY kategori;
        */
        $kategori_list = Utbk::select('kategori')->distinct()->orderBy('kategori')->get();

        // Ambil sub_kategori unik berdasarkan filter
        if ($kategori_filter && $kategori_filter !== 'Semua') {
            // SQL Query untuk sub_kategori dengan filter kategori:
            /*
            SELECT DISTINCT sub_kategori, kategori, gambar 
            FROM utbk 
            WHERE kategori = ?;
            */
            $sub_kategori_unik = Utbk::where('kategori', $kategori_filter)
                ->select('sub_kategori', 'kategori', 'gambar')
                ->distinct()
                ->get();
        } else {
            // SQL Query untuk semua sub_kategori:
            /*
            SELECT DISTINCT sub_kategori, kategori, gambar FROM utbk;
            */
            $sub_kategori_unik = Utbk::select('sub_kategori', 'kategori', 'gambar')
                ->distinct()
                ->get();
        }

        // Data spesifik per sub kategori (untuk kompatibilitas dengan view yang ada)

        // SQL Query untuk PPID:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Pengantar Penalaran Induktif dan Deduktif';
        */
        $ppid = DB::table('utbk')->where('sub_kategori', 'Pengantar Penalaran Induktif dan Deduktif')->get();

        // SQL Query untuk PD:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Penalaran Deduktif';
        */
        $pd = DB::table('utbk')->where('sub_kategori', 'Penalaran Deduktif')->get();

        // SQL Query untuk PI:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Penalaran Induktif';
        */
        $pi = DB::table('utbk')->where('sub_kategori', 'Penalaran Induktif')->get();

        // SQL Query untuk PK:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Penalaran Kuantitatif';
        */
        $pk = DB::table('utbk')->where('sub_kategori', 'Penalaran Kuantitatif')->get();

        // SQL Query untuk MT:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Membaca Teks';
        */
        $mt = DB::table('utbk')->where('sub_kategori', 'Membaca Teks')->get();

        // SQL Query untuk EJA:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Ejaan';
        */
        $eja = DB::table('utbk')->where('sub_kategori', 'Ejaan')->get();

        // SQL Query untuk KATA:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Kata dan Pembentukannya';
        */
        $kata = DB::table('utbk')->where('sub_kategori', 'Kata dan Pembentukannya')->get();

        // SQL Query untuk KALIMAT:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Kalimat';
        */
        $kalimat = DB::table('utbk')->where('sub_kategori', 'Kalimat')->get();

        // SQL Query untuk DIKSI:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Diksi dan Makna Kata';
        */
        $diksi = DB::table('utbk')->where('sub_kategori', 'Diksi dan Makna Kata')->get();

        // SQL Query untuk LBI:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Literasi Bahasa Indonesia';
        */
        $lbi = DB::table('utbk')->where('sub_kategori', 'Literasi Bahasa Indonesia')->get();

        // SQL Query untuk BASIC:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Get to Know All the Basics';
        */
        $basic = DB::table('utbk')->where('sub_kategori', 'Get to Know All the Basics')->get();

        // SQL Query untuk ENG1:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'English Level 1';
        */
        $eng1 = DB::table('utbk')->where('sub_kategori', 'English Level 1')->get();

        // SQL Query untuk ENG2:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'English Level 2';
        */
        $eng2 = DB::table('utbk')->where('sub_kategori', 'English Level 2')->get();

        // SQL Query untuk ENG3:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'English Level 3';
        */
        $eng3 = DB::table('utbk')->where('sub_kategori', 'English Level 3')->get();

        // SQL Query untuk LM:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Logika Matematika';
        */
        $lm = DB::table('utbk')->where('sub_kategori', 'Logika Matematika')->get();

        // SQL Query untuk BIL:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Bilangan';
        */
        $bil = DB::table('utbk')->where('sub_kategori', 'Bilangan')->get();

        // SQL Query untuk ALJ:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Aljabar 1';
        */
        $alj = DB::table('utbk')->where('sub_kategori', 'Aljabar 1')->get();

        // SQL Query untuk GEO:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Geometri 1';
        */
        $geo = DB::table('utbk')->where('sub_kategori', 'Geometri 1')->get();

        // SQL Query untuk DATA:
        /*
        SELECT * FROM utbk WHERE sub_kategori = 'Data dan Ketidakpastian 1';
        */
        $data = DB::table('utbk')->where('sub_kategori', 'Data dan Ketidakpastian 1')->get();

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

        // Validasi: pastikan semua jawaban diisi dan maksimal 1000 karakter
        $request->validate([
            'jawaban' => 'required|array',
            'jawaban.*' => 'required|string|max:1000',
        ]);

        // Simpan semua jawaban ke database
        foreach ($request->jawaban as $id_soal => $jawaban) {
            // SQL Query untuk insert jawaban:
            /*
            INSERT INTO jawaban_utbk (soal_id, jawaban, created_at, updated_at) 
            VALUES (?, ?, NOW(), NOW());
            */
            DB::table('jawaban_utbk')->insert([
                'soal_id' => $id_soal, // pastikan ada kolom soal_id di tabel jawaban_utbk
                'jawaban' => $jawaban,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Ambil data soal dari tabel utbk
        $soal = DB::table('utbk')->where('id', $id_soal)->first();

        // Pastikan soal ditemukan sebelum insert
        if ($soal) {

            DB::table('jawaban_utbk')->insert([
                'user_id' => Auth::id(),
                'name' => Auth::user()->name,
                'soal_id' => $id_soal,
                'kategori' => $soal->kategori,
                'sub_kategori' => $soal->sub_kategori,
                'jawaban' => $jawaban,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return back()->with('success', 'Semua jawaban berhasil dikirim!');
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
    public function show($sub_kategori)
    {
        // SQL Query untuk menampilkan materi berdasarkan sub_kategori:
        /*
        SELECT * FROM utbk 
        WHERE sub_kategori = ? 
        ORDER BY nomor 
        LIMIT 5;
        */
        $materi = Utbk::where('sub_kategori', $sub_kategori)
            ->orderBy('nomor')
            ->limit(5)
            ->get();
        return view('pages.section1.materi_detail', compact('materi', 'sub_kategori'));
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