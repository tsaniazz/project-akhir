<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DataDendaRequest;
use App\Models\DataDenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataDendaController extends Controller
{
    public function index()
    {
        $denda = DataDenda::all();
        return view('admin.datadenda',[
        'denda' => $denda,
       ]);
    }

    public function tambah(){
        return view('admin.tabeldenda');
    }

    public function store(DataDendaRequest $request)
    {
        // dd($request->all());

        DataDenda::create([
            'nama'  => $request->nama,
            'jumlah_hari'  => $request->jumlah_hari,
            'jumlah_denda'  => $request->jumlah_denda,
        ]);
        return redirect()->route('denda.index')->with('Oke', "$request->nama berhasil disimpan");
    }
     public function edit($id)
    {
        $denda = DataDenda::findOrFail($id);

        return view('admin.datadenda-edit', compact('denda'));
    }
    public function update(DataDendaRequest $request,$id)
    {
        $denda     = DataDenda::findOrFail($id);
        $denda->nama          = $request->nama;
        $denda->jumlah_hari   = $request->jumlah_hari;
        $denda->jumlah_denda  = $request->jumlah_denda;

        $denda->update();
        return redirect()->route('denda.index');
    }
    public function destroy($id)
    {
        $denda = DataDenda::findOrFail($id);
        Storage::delete($denda->nama);
        Storage::delete($denda->jumlah_hari);
        Storage::delete($denda->jumlah_denda);
        $denda->delete();
        return redirect()->route('denda.index');
    }
}
