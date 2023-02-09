<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataPeminjamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama'=>'required',
            'judul_buku'=>'required',
            'genre_buku'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_kembali'=>'required',
            'status'=>'required',
            
        ];
    }
    public function messages()
    {
        return[
            'nama.required' => 'Masukkan Nama Anda !',
            'judul_buku.required' => 'Masukkan Judul',
            'genre_buku.required' => 'Masukkan Gendre Buku',
            'tgl_pinjam.required' => 'Masukkan Tanggal Pinjam Buku',
            'tgl_kembali.required' => 'Masukkan Tanggal Kembali Buku',
            'status.required' => 'Masukkan Status Peminjaman Buku',
        ];
    }
}
