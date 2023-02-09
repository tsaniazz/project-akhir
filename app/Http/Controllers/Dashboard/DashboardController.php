<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dataanggota;
use App\Models\Databuku;
use App\Models\DataDenda;
use App\Models\Datapeminjam;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data_buku = Databuku::count();
        $data_anggota = Dataanggota::count();
        $peminjam = Datapeminjam::count();
        $denda = DataDenda::count();

     return view('dashboard.pages.index', [
        'data_buku' => $data_buku,
        'data_anggota' => $data_anggota,
        'peminjam' => $peminjam,
        'denda' => $denda,

     ]);
    }
}
