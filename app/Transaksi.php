<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['id_transaksi', 'nis', 'kode_buku' ,'tanggal_peminjam', 'tanggal_pengembalian','status','id_petugas'];
    protected $table = 'transaksi';  
}
