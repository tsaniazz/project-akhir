<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataanggota extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'kodepos',
        'telp',
        'email',
        'img_user',
        'status' ,
        
    ];
    use HasFactory;
}
