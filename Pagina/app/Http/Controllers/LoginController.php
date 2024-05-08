<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function postRegistration(Request $request){
        //Validar Datos

        $user = new Usuario();

        $user->login_usuario = $request->login_usuario;
        $user->nombre_usuario = $request->nombre_usuario;
        $user->email_usuario = $request->email_usuario;
        $user->celular_usuario = $request->celular_usuario;
        $user->direccion_usuario = $request->direccion_usuario;
        $user->id_municipio_usuario = $request->id_municipio_usuario;
        $user->password_usuario = Hash::make($request->password_usuario);
        
        $user->save();

    }

    public function logear(Request $request){
        // Validacion

        $credentials = [
            "email_usuario "=>$request->emaemail_usuario,
            "password"=>$request -> password
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials.$remember)){

            $request->session()->regenerate();

            return redirect()->intended(route('privado'));
        }else{
            return redirect('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('idenx'));
    }
}
