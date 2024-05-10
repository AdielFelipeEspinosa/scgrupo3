<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function indexRegister()
    {
        return view('auth.register');
    }

    public function indexLogin()
    {
        return view('auth.login');
    }

    public function postRegistration(Request $request)
    {

        $user = new User();

        $user->login_usuario = $request->login_usuario;
        $user->nombre_usuario = $request->nombre_usuario;
        $user->email_usuario = $request->email_usuario;
        $user->celular_usuario = $request->celular_usuario;
        $user->direccion_usuario = $request->direccion_usuario;
        $user->id_municipio_usuario = $request->id_municipio_usuario;
        $user->password = Hash::make($request->password);
        $user->registro_usuario = now();

        $user->save();

        return redirect('login');
    }

    public function logear(Request $request)
    {

        $credentials = [
            "email_usuario" => $request->email_usuario,
            "password" => $request->password
        ];
        
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('index');
        } else {
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('idenx'));
    }
}
