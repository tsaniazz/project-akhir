<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databuku extends Model
{
    use HasFactory;

    protected $table;

    protected $fillable = [
        'judul_buku',
        'genre_buku',
        'status',
        
    ];

public function datapeminjam()
{
    return $this->belongsTo(Datapeminjam::class, 'judul_buku', 'id');
}
    
}
