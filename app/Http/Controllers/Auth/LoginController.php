<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show (){
        return view ('auth.login');
    }

    public function handle(){
        // crear la sesión y comprobar
        $success = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ],request()->has('remember'));

        if($success){
            return redirect()->to(RouteServiceProvider::HOME)->with ('success', 'Sesión Iniciada');;
        }

        return back()->withErrors([
            'email' => 'Las credeciales no coinciden con nuestros registros.',
        ]);
    }
}
