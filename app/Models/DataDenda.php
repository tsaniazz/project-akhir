<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDenda extends Model
{
    use HasFactory;
    protected $table = "datadendas";
    protected $fillable = [
        'nama',
        'jumlah_hari',
        'jumlah_denda',
    ];
}
