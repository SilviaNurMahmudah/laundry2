<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->nama = "Admin";
        $admin->nohp = "1234567890";
        $admin->password = \Hash::make("admin123");
        $admin->roles = "Admin";
        $admin->save();

        $pcuci = new \App\User;
        $pcuci->nama = "Petugas Cuci";
        $pcuci->nohp = "2345678901";
        $pcuci->password = \Hash::make("petugascuci");
        $pcuci->roles = "PCuci";
        $pcuci->save();

        $psetrika = new \App\User;
        $psetrika->nama = "Petugas Setrika";
        $psetrika->nohp = "3456789012";
        $psetrika->password = \Hash::make("petugassetrika");
        $psetrika->roles = "PSetrika";
        $psetrika->save();

        $ppack = new \App\User;
        $ppack->nama = "Petugas Packing";
        $ppack->nohp = "4567890123";
        $ppack->password = \Hash::make("petugaspacking");
        $ppack->roles = "PPacking";
        $ppack->save();
    }
}
