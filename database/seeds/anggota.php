<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota')->insert([
            'nis'       => "2151682821",
            'nama'      => "Abdul Rohim",
            'kelas'     => "7",
            'alamat'    => "Bogor",
            'image'     => "99"
        ]);
    }
}
