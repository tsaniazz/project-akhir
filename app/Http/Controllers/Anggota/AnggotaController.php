<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use App\Models\Dataanggota;
use App\Models\Databuku;
use App\Models\DataDenda;
use App\Models\Datapeminjam;
use App\Models\Datapeminjamananggota;
use App\Models\Datapinjamanggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // public function dashboard()
    // {
    //     $data_buku = Databuku::count();
    //     $data_anggota = Dataanggota::count();
    //     $peminjam = Datapeminjam::count();
    //     $denda = DataDenda::count();

    //  return view('dashboardanggota.dashboardanggota', [
    //     'data_buku' => $data_buku,
    //     'data_anggota' => $data_anggota,
    //     'peminjam' => $peminjam,
    //     'denda' => $denda,

    //  ]);
    // }

    public function index()
    {
        return view('anggota.indexx');
    }

    public function dataBuku()
    {
        $peminjaman = Datapeminjam::all();
        $data_buku = Databuku::all();

        return view('anggota.databukuanggota', [
            'peminjaman' => $peminjaman,
            'data_buku' => $data_buku,
        ]);
    }

    public function PinjamBuku()
    {
        $data_buku = Databuku::all();
        
        return view('anggota.pinjambuku', [
            'data_buku'  => $data_buku,
        ]);
    }

    public function PinjamBukuTambah(Request $request)
    {
        // dd($request->all());
        
        Datapinjamanggota::create([
            'judul_buku'      => $request->judul_buku,
            'tanggal_pinjam'  => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);

        return redirect()->route('data.pinjam.buku.anggota')->with('Ok', "Kamu Berhasil meminjam buku $request->judul_buku sampai tanggal $request->tanggal_kembali");
    }
    
}
