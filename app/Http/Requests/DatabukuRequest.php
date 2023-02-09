<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatabukuRequest extends FormRequest
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
            'judul_buku'=>'required',
            'genre_buku'=>'required',
            
        ];
    }
    public function messages()
    {
        return[
            'judul_buku.required' => 'isi judul',
            'genre_buku.required' => 'isi genre',
        ];
    }
}
