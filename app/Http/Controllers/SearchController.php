<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Course;

use App\Models\University;
class SearchController extends Controller
{
    // Tambahkan ini

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Cek apakah ada match di Career
        $career = Career::where('name', 'like', "%{$keyword}%")->first();
        if ($career) {
            return redirect()->route('careers', ['keyword' => $keyword]);
        }

        // Cek apakah ada match di Course (Certificate)
        $course = Course::where('name', 'like', "%{$keyword}%")->first();
        if ($course) {
            return redirect()->route('certificate', ['keyword' => $keyword]);
        }

        // ✅ Cek apakah ada match di University (module)
        $university = University::where('name', 'like', "%{$keyword}%")->first();
        if ($university) {
            return redirect()->route('universities.index', ['keyword' => $keyword]);
        }

        return redirect()->back()->with('message', 'Data tidak ditemukan.');
    }

}
