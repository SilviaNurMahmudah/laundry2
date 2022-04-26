<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Pelanggan;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'nohp' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'nama' => $data['nama'],
            'nohp' => $data['nohp'],
            'password' => Hash::make($data['password']),
            'roles' => 'User'
        ]);
        $kode = 'cust/001';
        $getId = Pelanggan::orderBy('id', 'DESC')->take(1)->get();
        foreach($getId as $p) {
            $kodelama = $p->id;
            $kodebaru = $kodelama + 1;
            $kode = 'cust/00'.$kodebaru;
        }
        $user = Pelanggan::create([
            'kode' => $kode,
            'nama' => $data['nama'],
            'nohp' => $data['nohp'],
        ]);
        return $user;
    }
}
