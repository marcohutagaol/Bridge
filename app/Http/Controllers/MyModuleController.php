<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;

class MyModuleController extends Controller
{
    public function index()
    {
        // Query untuk module saja
        $checkouts = Checkout::where('user_id', Auth::id())
            ->where('item_type', 'module')
            ->whereHas('module') // Pastikan module exists
            ->with(['module' => function($query) {
                // Optional: tambahkan kondisi untuk module yang aktif
                // $query->where('status', 'active');
            }])
            ->orderBy('created_at', 'desc')
            ->get();

        // Filter lagi di collection level untuk memastikan
        $checkouts = $checkouts->filter(function($checkout) {
            return $checkout->item_type === 'module' && $checkout->module !== null;
        });

        return view('pages.mymodule', compact('checkouts'));
    }
}