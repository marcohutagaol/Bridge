<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Career;
use Illuminate\Support\Facades\Auth;

class MyCareerController extends Controller
{
    public function index()
    {
        // Query untuk career saja
        $checkouts = Checkout::where('user_id', Auth::id())
            ->where('item_type', 'career')
            ->whereHas('career') // Pastikan career exists
            ->with(['career' => function($query) {
                // Optional: tambahkan kondisi untuk career yang aktif
                // $query->where('status', 'active');
            }])
            ->orderBy('created_at', 'desc')
            ->get();

        // Filter lagi di collection level untuk memastikan
        $checkouts = $checkouts->filter(function($checkout) {
            return $checkout->item_type === 'career' && $checkout->career !== null;
        });

        return view('pages.mycareer', compact('checkouts'));
    }
}