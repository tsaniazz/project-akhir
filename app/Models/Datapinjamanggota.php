<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapinjamanggota extends Model
{
    use HasFactory;

    protected $table;
    
    protected $fillable = [
        'judul_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];
    public function databuku()
    {
        return $this->belongsTo(Databuku::class, 'judul_buku', 'id');
    }
}
