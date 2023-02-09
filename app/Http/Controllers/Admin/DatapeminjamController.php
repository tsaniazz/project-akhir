<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DataPeminjamRequest;
use App\Models\Databuku;
use App\Models\Datapeminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatapeminjamController extends Controller
{
    public function index()
    {
        $peminjam = Datapeminjam::all();

        return view('admin.datapeminjam', compact('peminjam'));
    }
    public function tambah()
    {
       $peminjam = Datapeminjam::all();
       $data_buku = Databuku::all();

       return view('admin.tabelpeminjam', [
           'peminjam' => $peminjam,
           'data_buku' => $data_buku,
        ]);
    }
    public function store(DataPeminjamRequest $request)
    {

        // dd($request->all());
        Datapeminjam::create([
            'nama'        => $request->nama,
            'judul_buku'  => $request->judul_buku,
            'genre_buku'  => $request->genre_buku,
            'tgl_pinjam'  => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'status'      => $request->status,
        ]);
        return redirect()->route('peminjam.index')->with('Oke', "$request->peminjaman berhasil disimpan");
    }

    public function edit($id)
    {
        $peminjam = Datapeminjam::findOrFail($id);
        $data_buku     = Datapeminjam::all();

        return view('admin.datapeminjam-edit', compact('peminjam', 'data_buku'));
    }
    public function update(DataPeminjamRequest $request,$id)
    {
        $peminjam     = Datapeminjam::findOrFail($id);
        $peminjam ->nama  = $request->nama;
        $peminjam ->judul_buku  = $request->judul_buku;
        $peminjam ->genre_buku  = $request->genre_buku;
        $peminjam ->tgl_pinjam  = $request->tgl_pinjam;
        $peminjam ->tgl_kembali  = $request->tgl_kembali;
        $peminjam ->status  = $request->status;

        $peminjam ->update();
        return redirect()->route('peminjam.index');
    }
    public function destroy($id)
    {
        $data_buku = Datapeminjam::findOrFail($id);
        Storage::delete($data_buku->nama);
        Storage::delete($data_buku->judul_buku);
        Storage::delete($data_buku->genre_buku);
        Storage::delete($data_buku->tgl_pinjam);
        Storage::delete($data_buku->tgl_kembali);
        Storage::delete($data_buku->status);

        $data_buku->delete();
        return redirect()->route('peminjam.index');
    }
    
}
