<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert(
            [
                'kode_buku'     => 'AK-1992',
                'judul_buku'    => 'Aqidah Al Wasithiyah',
                'klasifikasi'   => 'Buku Yang Ditulis Oleh Syaikhul Islam Ibnu Taimiyah',
                'image'         => 'https://www.almanshurohagency.com/wp-content/uploads/2019/10/Syarah-akidah-Wasitiyah-2018.png'
            ],
            [
                'kode_buku'     => 'AK-1991',
                'judul_buku'    => 'Tafsir Quran Ibn kathir',
                'klasifikasi'   => 'Buku Yang Ditulis Oleh Ibn kathir',
                'image'         => 'https://www.almanshurohagency.com/wp-content/uploads/2019/10/Syarah-akidah-Wasitiyah-2018.png'
            ]
        );
    }
}
