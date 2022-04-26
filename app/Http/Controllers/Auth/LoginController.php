<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function redirectTo() {
        $for = [
            'Admin' => 'dashboard',
        ];
        return $this->redirectTo = route($for[auth()->user()->roles]);
    } 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
