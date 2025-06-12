<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Checkout;
use App\Models\Course;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user_type = Auth()->user()->user_type;

            if ($user_type == 'user') {
                return view('pages.index');
            }

            if ($user_type == 'admin') {
                return view('admin.dashboard');
            }
        }
    }

    public function users(Request $request)
    {
        $perPage = $request->input('per_page', 10); 
        $search = $request->input('user_name');
        $users = User::where('user_type', 'user')
        ->where('name', 'like', '%' . $search . '%')
        ->paginate($perPage)
        ->appends($request->query());

        return view('admin.list.userlist', compact('users'));
    }

    public function careers(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $search = $request->input('item_name');
        $careers = Career::where('name', 'like', '%' . $search . '%')
        ->orWhere('kategoris', 'like', '%' . $search . '%')
        ->paginate($perPage)
        ->appends($request->query());

        return view('admin.list.career_list', compact('careers'));
    }

    public function createCareer()
    {
        return view('admin.list.create.career_create');
    }

    public function storeCareer(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'kategoris' => 'required|string',
            'image' => 'nullable|string',
            'description' => 'nullable|string',
            'description2' => 'nullable|string',
            'median_salary' => 'nullable|string',
            'jobs_available' => 'nullable|string',
            'credential' => 'nullable|string',
            'credential_logo' => 'nullable|string', 
        ]);

        Career::create($validated);

        return redirect()->route('admin.list.career_list')->with('success', 'Career created successfully.');
    }

    public function editCareer($id)
    {
        $career = Career::find($id);
        return view('admin.list.edit.career_edit', compact('career'));
    }

    public function updateCareer(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'kategoris' => 'required|string',
            'image' => 'nullable|string',
            'description' => 'nullable|string',
            'description2' => 'nullable|string',
            'median_salary' => 'nullable|string',
            'jobs_available' => 'nullable|string',
            'credential' => 'nullable|string',
            'credential_logo' => 'nullable|string', 
        ]);

        $career = Career::find($id);
        $career->update($validated);

        return redirect()->route('admin.list.career_list')->with('success', 'Career updated successfully.');
    }

    public function destroyCareer($id)
    {
        $career = Career::find($id);
        $career->delete();

        return redirect()->route('admin.list.career_list')->with('success', 'Career deleted successfully.');
    }

    public function degrees(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $search = $request->input('item_name');
        $degrees = University::where('name', 'like', '%' . $search . '%')
        ->orWhere('degree', 'like', '%' . $search . '%')
        ->orWhere('tipe', 'like', '%' . $search . '%')
        ->paginate($perPage)
        ->appends($request->query());

        return view('admin.list.degree_list', compact('degrees'));
    }

    public function createDegree()
    {
        return view('admin.list.create.degree_create');
    }

    public function storeDegree(Request $request)
    {
        $validated = $request->validate([
            'degree' => 'required|string',
            'tipe' => 'nullable|string',
            'name' => 'required|string|max:255',
            'ranking' => 'nullable|string',
            'image_path' => 'nullable|string',
            'application_deadline' => 'nullable|string',
        ]);

        University::create($validated);

        return redirect()->route('admin.list.degree_list')->with('success', 'Degree created successfully.');
    }

    public function editDegree($id)
    {
        $degree = University::find($id);
        return view('admin.list.edit.degree_edit', compact('degree'));
    }

    public function updateDegree(Request $request, $id)
    {
        $validated = $request->validate([
            'degree' => 'required|string',
            'tipe' => 'nullable|string',
            'name' => 'required|string|max:255',
            'ranking' => 'nullable|string',
            'image_path' => 'nullable|string',
            'application_deadline' => 'nullable|string',
        ]);

        $degree = University::find($id);
        $degree->update($validated);

        return redirect()->route('admin.list.degree_list')->with('success', 'Degree updated successfully.');
    }

    public function destroyDegree($id)
    {
        $degree = University::find($id);
        $degree->delete();

        return redirect()->route('admin.list.degree_list')->with('success', 'Degree deleted successfully.');
    }

    public function courses(Request $request)
    {
        $perPage = $request->input('per_page', 250);
        $search = $request->input('item_name');
        $courses = Course::where('name', 'like', '%' . $search . '%')
        ->paginate($perPage)
        ->appends($request->query());

        return view('admin.list.course_list', compact('courses'));
    }

    public function createCourse()
    {
        return view('admin.list.create.course_create');
    }

    public function storeCourse(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|string',
            'description' => 'required|string|max:255',
            'duration_r' => 'nullable|string',
            'institution' => 'nullable|string',
            'institution_logo' => 'nullable|string',
            'kategori' => 'nullable|string',
        ]);

        Course::create($validated);

        return redirect()->route('admin.list.course_list')->with('success', 'Course created successfully.');
    }

    public function editCourse($id)
    {
        $course = Course::find($id);
        return view('admin.list.edit.course_edit', compact('course'));
    }

    public function updateCourse(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|string',
            'description' => 'required|string|max:255',
            'duration_r' => 'nullable|string',
            'institution' => 'nullable|string',
            'institution_logo' => 'nullable|string',
            'kategori' => 'nullable|string',
        ]);

        $course = Course::find($id);
        $course->update($validated);

        return redirect()->route('admin.list.course_list')->with('success', 'Course updated successfully.');
    }

    public function destroyCourse($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect()->route('admin.list.course_list')->with('success', 'Course deleted successfully.');
    }
}
