<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;

class AnggotaAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all();
        return response()->json(["anggota" => $anggota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'nis' => 'required',
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string',
            'alamat' => 'required',
            'image' => 'required|string|max:255'
        ]);
        Anggota:create($request->all());
        return response()->json(["message" => "Berhasil Menambahkan Data"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Anggota::find($id);
        return response()->json(["anggota" => $member]);
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
            'nis' => 'required',
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string',
            'alamat' => 'required',
            'image' => 'required|string|max:255'
        ]);
        Anggota::where('id', $id)->update($request->all());
        return response()->json(["message" => "Berhasil Mengubah Data"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Anggota::find($id);
        $member->delete();
        return response()->json(["message" => "Berhasil Mengahpus Data"]);
    }
}
