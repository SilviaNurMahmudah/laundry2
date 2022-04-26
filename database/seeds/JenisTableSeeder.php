<?php

use Illuminate\Database\Seeder;

class JenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = new \App\Jenis;
        $jenis->kode = "jns/001";
        $jenis->nama = "Reguler";
        $jenis->biaya = "6000";
        $jenis->save();

        $jenis = new \App\Jenis;
        $jenis->kode = "jns/002";
        $jenis->nama = "Express";
        $jenis->biaya = "12000";
        $jenis->save();

        $jenis = new \App\Jenis;
        $jenis->kode = "jns/003";
        $jenis->nama = "Kilat";
        $jenis->biaya = "16000";
        $jenis->save();
    }
}
