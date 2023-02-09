<?php

namespace App\Models;

use App\Models\Databuku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datapeminjam extends Model
{
    use HasFactory; 

    protected $table;
    
    protected $fillable = [
        'nama',
        'judul_buku',
        'genre_buku',
        'tgl_pinjam',
        'tgl_kembali',
        'status',
    ];
    
    public function databuku()
    {
        return $this->belongsTo(Databuku::class, 'judul_buku', 'genre_buku', 'status', 'id');
    }

    public function data()
    {
        return $this->belongsTo(Datapeminjam::class, 'judul_buku', 'id');
    }
}
