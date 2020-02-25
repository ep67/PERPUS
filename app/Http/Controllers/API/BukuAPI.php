<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Buku;

class BukuAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Buku::all();
        if (request()->q != '') {
            $book = $book->where('judul_buku', 'LIKE', '%' . request()->q . '%');
        }
        return response()->json(["buku" => $book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul_buku' => 'required|string|max:255',
            'klasifikasi' => 'required|string',
            'image' => 'required'
        ]);
        Buku::create($request->all());
        return response()->json(['message' => "Berhasil Menambah Buku"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode)
    {
        $check = Buku::where('kode_buku', $kode);
        if($check == null) return response()->json(["message" => "Buku Tidak Ada"],404);
        return response()->json(["buku" => $check]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul_buku' => 'required|string|max:255',
            'klasifikasi' => 'required|string',
            'image' => 'required'
        ]);
        Buku::where('id', $id)->update($request->all());
        return response()->json(['message' => "Berhasil Mengubah Buku"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Buku::find($id);
        $book->delete();
        return response()->json(["message" => "Berhasil Menghapus Buku"]);
    }
}
