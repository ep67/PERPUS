<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaksi::all();
        return response()->json(["Transaksi" => $transaction]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nis'               => 'required|string|max:255',
            'kode_buku'         => 'required|string',
            'tanggal_peminjam'  => 'required',
            'tanggal_kembali'   => 'required',
            'status'            => 'required',
            'id_petugas'        => 'required'
        ]);
        Transaksi::create($request->all());
        return response()->json(["message" => "Berhasil Menambahkan data"], 201);
    }

    public function store_pengembalian(Request $request)
    {
        $this->validate($request, [
            'id_transaksi'               => 'required|string|max:255',
            'tgl_pengembalian'           => 'required|string',
            'denda'                      => 'required',
            'nominal'                    => 'required',
            'id_petugas'                 => 'required'
        ]);
    }

    public function destroy_pengembalian($id)
    {
        # code...
    }

    public function find($id)
    {
        # code...
    }
}
