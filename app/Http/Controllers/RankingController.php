<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function index()
    {
        $checkouts = [
            'pembelian_course' => Checkout::where('item_type', 'course')->count(),
            'pembelian_career' => Checkout::where('item_type', 'career')->count(),
            'pembelian_degree' => Checkout::where('item_type', 'module')->count()
        ];

        $topUsers = Checkout::select('user_id', DB::raw('COUNT(*) as total'))
            ->with('user')
            ->groupBy('user_id')
            ->orderByDesc('total')
            ->limit(4)
            ->get();

        $labels = $topUsers->map(fn($item) => $item->user->name); // atau email jika tidak ada name
        $data = $topUsers->map(fn($item) => $item->total);

        return view('admin.ranking',  [
            'checkouts' => $checkouts,
            'labels' => $labels,
            'data' => $data,
        ]);
    }
}
