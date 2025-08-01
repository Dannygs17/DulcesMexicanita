<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Mostrar el formulario de registro
    public function show()
    {
        return view ('auth.register');
    }
    // Registrar en BD el usuario registrado
    public function handle()
    {
        //Validando los datos de registro del usuario
        request()->validate([
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:50'],
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ]);

        // crear el registro en la tabla users
        // Laravel usa bcrypt para encriptar contraseñas usasmos Hash::make() para proteger la contraseña del usuario. 
       $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        // evento de confirmación
        event(new Registered($user));

        // autentificar una vez registrado
        Auth::login($user);

        // Redireccionar
        // return to_route('index')-> with ('success', 'Usuario Registrado');
        return redirect()->to(RouteServiceProvider::HOME)->with ('success', 'Usuario Registrado');

    }

}
