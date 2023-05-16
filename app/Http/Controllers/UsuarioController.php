<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Noticias;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return response()->json('CAPTCHA incorrecto', 429);
        } else {
            // Hacer validacion de las credenciales de inicio de sesion
            if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
                $request->session()->regenerate();
                return response()->json('Ok');
            }
        }
        // Si todo lo anterior falla, es porque seguramente el usuario introdujo las credenciales incorrectamente
        return response()->json('Credenciales incorrectas', 500);
    }

    public function panelAdmin() {
        return view('admin.panelAdmin');
    }

    public function index()
    {
        return view('admin.iniciaSesion');
    }
}
