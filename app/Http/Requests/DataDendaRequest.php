<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataDendaRequest extends FormRequest
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
            'jumlah_hari'=>'required',
            'jumlah_denda'=>'required',
            
        ];
    }
    public function messages()
    {
        return[
            'nama.required' => 'Masukkan Nama Anda !',
            'jumlah_hari.required' => 'Masukkan Jumlah Hari',
            'jumlah_denda.required' => 'Masukkan Jumlah Denda',
        ];
    }
}
