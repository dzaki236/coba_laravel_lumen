<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Model
class Buku extends Model 
{
   protected $table = 'buku';
    protected $fillable = [
            'judul','penulis','penerbit','tahun_terbit','sinopsis'
    ];
}
