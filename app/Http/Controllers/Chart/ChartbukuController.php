<?php

namespace App\Http\Controllers\Chart;

use App\Models\Databuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChartbukuController extends Controller
{
    public function index()
    {
        $data_buku = Databuku::select(DB::raw("COUNT(*) as count"))
            ->groupBy(DB::raw("genre_buku"))
            ->pluck('count');

        return view('chart.chartbuku', compact('data_buku'));
    }
}
