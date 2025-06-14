<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Career;
use App\Models\Module;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class LearningPageController extends Controller
{
    public function show($type, $id)
    {
        $checkout = Checkout::where('user_id', Auth::id())
                           ->where('item_type', $type)
                           ->where('item_id', $id)
                           ->first();
        // SQL:
        // SELECT * FROM checkouts 
        // WHERE user_id = Auth::id() AND item_type = '$type' AND item_id = '$id' 
        // LIMIT 1;

        if (!$checkout) {
            abort(403, 'You do not have access to this learning material.');
        }

        // Get the item data based on type
        switch ($type) {
            case 'course':
                $item = Course::findOrFail($id);
                // SQL:
                // SELECT * FROM courses WHERE id = '$id' LIMIT 1;
                return view('pages.detail.learningpage.course_learningpage', compact('item', 'checkout'));
                
            case 'career':
                $item = Career::findOrFail($id);
                // SQL:
                // SELECT * FROM careers WHERE id = '$id' LIMIT 1;
                return view('pages.detail.learningpage.careers_learningpage', compact('item', 'checkout'));
                
            case 'module':
                $item = University::findOrFail($id);
                // SQL:
                // SELECT * FROM universities WHERE id = '$id' LIMIT 1;
                return view('pages.detail.learningpage.module_learningpage', compact('item', 'checkout'));
                
            default:
                abort(404);
        }
    }

    // Alternative individual methods if you prefer separate routes
    public function showCourse($id)
    {
        return $this->show('course', $id);
    }

    public function showCareer($id)
    {
        return $this->show('career', $id);
    }

    public function showModule($id)
    {
        return $this->show('module', $id);
    }
}
