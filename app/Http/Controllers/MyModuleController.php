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
        // SQL: SELECT * FROM checkouts 
        //      WHERE user_id = ? AND item_type = 'module' 
        //      AND EXISTS (SELECT * FROM modules WHERE modules.id = checkouts.module_id)
        //      ORDER BY created_at DESC;

        // Query untuk module saja
        $checkouts = Checkout::where('user_id', Auth::id())
            ->where('item_type', 'module')
            ->whereHas('module') // Pastikan module exists
            ->with(['module' => function($query) {
                // SQL opsional jika ingin hanya yang status-nya aktif
                // AND modules.status = 'active'
                // $query->where('status', 'active');
            }])
            ->orderBy('created_at', 'desc')
            ->get();

        // Ini bukan query SQL, tetapi filter ulang di level koleksi PHP
        $checkouts = $checkouts->filter(function($checkout) {
            return $checkout->item_type === 'module' && $checkout->module !== null;
        });

        // Kirim data ke view 'pages.mymodule'
        return view('pages.mymodule', compact('checkouts'));
    }
}
