<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataAnggotaRequest extends FormRequest
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
            'nama'        => 'required',
            'alamat'      => 'required',
            'kodepos'     => 'required',
            'telp'        => 'required',
            'email'       => 'required',
            'img_user'    => 'required',
            'status'      => 'required',
            
        ];
    }
    public function messages()
    {
        return[
            'nama.required'        => 'isi nama',
            'alamat.required'      => 'isi alamat',
            'kodepos.required'     => 'isi kodepos',
            'telp.required'        => 'isi telephone',
            'email.required'       => 'isi email',
            'img_user.required'    => 'isi image',
            'status.required'      => 'isi status',
        ];
    }
}
