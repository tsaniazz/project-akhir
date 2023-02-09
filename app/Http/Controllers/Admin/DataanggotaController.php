<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DataAnggotaRequest;
use App\Models\Dataanggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataanggotaController extends Controller
{
    public function index()
    {
        $anggota = Dataanggota::all();
        return view('admin.dataanggota', [
            'anggota' => $anggota,
        ]);
    }
    public function tambah()
    {
        $anggota = Dataanggota::all();

       return view('admin.tabelanggota', [
           'anggota' => $anggota,
        ]);
    }
    public function store(DataAnggotaRequest $request)
    {
        Dataanggota::create([
            'nama'        => $request->nama,
            'alamat'      => $request->alamat,
            'kodepos'     => $request->kodepos,
            'telp'        => $request->telp,
            'email'       => $request->email,
            'img_user'    => $request->file('img_user')->store('img_user'),
            'status'      => $request->status,

        ]);
        return redirect()->route('anggota.index')->with('Oke', "$request->anggota berhasil disimpan");
    }
    public function edit($id)
    {
        $anggota = Dataanggota::findOrFail($id);
        return view('admin.dataanggota-edit', compact('anggota'));
    }
    public function update(DataAnggotaRequest $request,$id)
    {
        $anggota     = Dataanggota::findOrFail($id);
        $anggota ->nama      = $request->nama;
        $anggota ->alamat    = $request->alamat;
        $anggota ->kodepos   = $request->kodepos;
        $anggota ->telp      = $request->telp;
        $anggota ->email     = $request->email;
        $anggota ->img_user  = $request->file('img_user')->store('img_user');
        $anggota ->status    = $request->status;

        $anggota ->update();
        return redirect()->route('anggota.index')->with('Oke', "$request->anggotaberhasil diupdate");
    }
    public function destroy(DataAnggotaRequest $request,$id)
    {
        $anggota = Dataanggota::findOrFail($id);
        Storage::delete($anggota->nama);
        Storage::delete($anggota->alamat);
        Storage::delete($anggota->kodepos);
        Storage::delete($anggota->telp);
        Storage::delete($anggota->email);
        Storage::delete($anggota->img_user);
        Storage::delete($anggota->status);

        $anggota->delete();
        return redirect()->route('anggota.index');
    }
}
