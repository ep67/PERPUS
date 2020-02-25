<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['id_buku', 'kode_buku', 'judul_buku' ,'klasifikasi','image'];
    protected $table = 'buku';  
}
