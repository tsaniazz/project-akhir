<?php

namespace App\Http\Controllers\Anggota;

use Illuminate\Http\Request;
use App\Models\Datapinjamanggota;
use App\Http\Controllers\Controller;

class PinjamAnggotaController extends Controller
{
    public function dataPinjamBuku()
    {
        $pinjam = Datapinjamanggota::all();

        return view('anggota.datapinjam-anggota', [
            'pinjam'  => $pinjam,
        ]);
    }
}
