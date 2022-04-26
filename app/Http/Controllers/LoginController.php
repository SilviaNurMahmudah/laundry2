<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class LoginController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect('/status');
        }else{
            return view('login1');
        }
    }
    public function actionlogin(Request $request) {
        $nohp = $request->nohp;
        $password = $request->password;

        $data = User::where('nohp',$nohp)->first();
        if($data){ 
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->nama);
                Session::put('nohp',$data->nohp);
                Session::put('login',TRUE);
                return redirect('/status');
            }
            else{
                return redirect('login1')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login1')->with('alert','Password atau Email, Salah!');
        }
    }
}
