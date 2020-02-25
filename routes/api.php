<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('v2/auth', 'API\Auth@login'); // menampilkan buku
Route::get('v2/transaksi/find/{$id}', 'API\TransaksiAPI@find'); //untuk mencari transaksi anggota jika anggota hendak mengecek

Route::middleware(['jwt'])->group(function () {
  Route::get('v2/book', 'API\BukuAPI@index'); // menampilkan buku
  Route::post('v2/book', 'API\BukuAPI@store'); // menambahkan buku
  Route::put('v2/book/{id}', 'API\BukuAPI@update'); // mengedit buku
  Route::delete('v2/book/{id}', 'API\BukuAPI@destroy'); // menghapus buku
  
  Route::get('v2/anggota', 'API\AnggotaAPI@index'); // menampilkan anggota
  Route::post('v2/anggota', 'API\AnggotaAPI@store'); // menambahkan anggota
  Route::put('v2/anggota/{id}', 'API\AnggotaAPI@update'); // mengedit anggota
  Route::delete('v2/anggota/{id}', 'API\AnggotaAPI@destroy'); // menghapus anggota
  
  Route::get('v2/transaksi', 'API\TransaksiAPI@index'); // menampilkan transaksi
  Route::post('v2/transaksi', 'API\TransaksiAPI@store'); // menambahkan transaksi
  Route::delete('v2/transaksi/{id}', 'API\TransaksiAPI@destroy'); // menghapus transaksi 
  Route::post('v2/transaksi/pengembalian', 'API\TransaksiAPI@pengembalian'); // menambahkan data pengembalian buku  
  Route::delete('v2/transaksi/pengembalian/{id}', 'API\TransaksiAPI@destroy_pengembalian'); // menghapus data pengembalian buku 
});
