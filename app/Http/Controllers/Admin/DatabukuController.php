<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DatabukuRequest;
use App\Models\Databuku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Stringable;

class DatabukuController extends Controller
{
    public function index()
    {
        $data_buku = Databuku::all();
        return view('admin.databuku', [
            'data_buku' => $data_buku,
        ]);
    }
 
    public function tambah()
    {
       $data_buku = Databuku::all();

       return view('admin.tabeldatabuku', [
        'data_buku' => $data_buku,
    ]);
    }
    public function store(DatabukuRequest $request)
    {
        Databuku::create([
            'judul_buku'  => $request->judul_buku,
            'genre_buku'  => $request->genre_buku,
        ]);
        return redirect()->route('databuku.index')->with('Oke', "$request->data_buku berhasil disimpan");
    }
    public function edit($id)
    {
        $data_buku = Databuku::findOrFail($id);

        return view('admin.databuku-edit', compact('data_buku'));
    }
    public function update(DatabukuRequest $request,$id)
    {
        $data_buku     = Databuku::findOrFail($id);
        $data_buku->judul_buku  = $request->judul_buku;
        $data_buku->genre_buku  = $request->genre_buku;

        $data_buku->update();
        return redirect()->route('databuku.index');
    }
    public function destroy($id)
    {
        $data_buku = Databuku::findOrFail($id);
        Storage::delete($data_buku->judul_buku);
        Storage::delete($data_buku->genre_buku);
        $data_buku->delete();
        return redirect()->route('databuku.index');
    }

    



}
