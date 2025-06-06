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
        // Verify user has access to this item
        $checkout = Checkout::where('user_id', Auth::id())
                           ->where('item_type', $type)
                           ->where('item_id', $id)
                           
                           ->first();

        if (!$checkout) {
            abort(403, 'You do not have access to this learning material.');
        }

        // Get the item data based on type
        switch ($type) {
            case 'course':
                $item = Course::findOrFail($id);
                return view('pages.detail.learningpage.course_learningpage', compact('item', 'checkout'));
                
            case 'career':
                $item = Career::findOrFail($id);
                return view('pages.detail.learningpage.careers_learningpage', compact('item', 'checkout'));
                
            case 'module':
                $item = University::findOrFail($id);
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