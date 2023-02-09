<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataPeminjamanRequest extends FormRequest
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
        ];
    }
    public function messages()
    {
        return[
            'nama.required' => 'Masukkan Nama Anda !',
            'judul_buku.required' => 'Masukkan Judul Buku!',
        ];
    }
}
