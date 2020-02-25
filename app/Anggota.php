<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = ['nis', 'nama', 'kelas', 'alamat', 'image'];
    protected $table = 'anggota';
}
