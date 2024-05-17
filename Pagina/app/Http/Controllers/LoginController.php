<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function indexRegister()
    {
        $municipios = Municipio::all();
        return view('auth.register', compact('municipios'));
    }

    public function indexLogin()
    {
        return view('auth.login');
    }

    public function postRegistration(Request $request)
    {
        Validator::make($request->all(), [
            'login_usuario' => 'required',
            'nombre_usuario' => 'required',//Unico en todos los usuarios |unique:users, nombre_usuario
            'email_usuario' => 'required',
            'celular_usuario' => 'required',
            'direccion_usuario' => 'required',
            'id_municipio_usuario' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'//Verificar si el campo de contraseña es el mismo
        ])->validate();

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

        return redirect()->route('login')->withSuccess('Registrado Correctamente :D');
    }

    public function logear(Request $request)
    {

        $credentials = [
            "email_usuario" => $request->email_usuario,
            "password" => $request->password
        ];
        
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('index')
            ->withSuccess('Logueado Correctamente :D');

        } else {
            return redirect('login')->withMessage('Colocaste credenciales invalidas :c');
        }
    }

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('index')->withSuccess('Ha salido de la cuenta :D');
    }
}
