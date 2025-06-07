<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCreateController extends Controller
{
    public function careerList()
    {
        return view('admin.list.create.career_create');
    }
}
