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
        $query = Utbk::query();

        // Filter berdasarkan kategori jika tidak "Semua"
        if ($kategori_filter && $kategori_filter !== 'Semua') {
            $query->where('kategori', $kategori_filter);
        }

        // Ambil data soal dengan pagination (100 per halaman)
        $utbk = $query->paginate(100);

        // Ambil daftar kategori unik untuk dropdown filter
        $kategori_list = Utbk::select('kategori')->distinct()->orderBy('kategori')->get();

        // Ambil subkategori unik berdasarkan filter kategori
        if ($kategori_filter && $kategori_filter !== 'Semua') {
            $sub_kategori_unik = Utbk::where('kategori', $kategori_filter)
                ->select('sub_kategori', 'kategori', 'gambar')
                ->distinct()
                ->get();
        } else {
            $sub_kategori_unik = Utbk::select('sub_kategori', 'kategori', 'gambar')
                ->distinct()
                ->get();
        }

        // Ambil data berdasarkan subkategori masing-masing
        $ppid = DB::table('utbk')->where('sub_kategori', 'Pengantar Penalaran Induktif dan Deduktif')->get();
        $pd = DB::table('utbk')->where('sub_kategori', 'Penalaran Deduktif')->get();
        $pi = DB::table('utbk')->where('sub_kategori', 'Penalaran Induktif')->get();
        $pk = DB::table('utbk')->where('sub_kategori', 'Penalaran Kuantitatif')->get();
        $mt = DB::table('utbk')->where('sub_kategori', 'Membaca Teks')->get();
        $eja = DB::table('utbk')->where('sub_kategori', 'Ejaan')->get();
        $kata = DB::table('utbk')->where('sub_kategori', 'Kata dan Pembentukannya')->get();
        $kalimat = DB::table('utbk')->where('sub_kategori', 'Kalimat')->get();
        $diksi = DB::table('utbk')->where('sub_kategori', 'Diksi dan Makna Kata')->get();
        $lbi = DB::table('utbk')->where('sub_kategori', 'Literasi Bahasa Indonesia')->get();
        $basic = DB::table('utbk')->where('sub_kategori', 'Get to Know All the Basics')->get();
        $eng1 = DB::table('utbk')->where('sub_kategori', 'English Level 1')->get();
        $eng2 = DB::table('utbk')->where('sub_kategori', 'English Level 2')->get();
        $eng3 = DB::table('utbk')->where('sub_kategori', 'English Level 3')->get();
        $lm = DB::table('utbk')->where('sub_kategori', 'Logika Matematika')->get();
        $bil = DB::table('utbk')->where('sub_kategori', 'Bilangan')->get();
        $alj = DB::table('utbk')->where('sub_kategori', 'Aljabar 1')->get();
        $geo = DB::table('utbk')->where('sub_kategori', 'Geometri 1')->get();
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
            $soal = DB::table('utbk')->where('id', $id_soal)->first();

            // Jika soal ditemukan, insert ke tabel jawaban_utbk
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
