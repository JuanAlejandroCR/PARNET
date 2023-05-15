<?php

namespace App\Http\Controllers;

use App\Mail\ParNetMail;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto.index');
    }

    public function store(Request $request)
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return response()->json('CAPTCHA incorrecto', 429);
        } else {
            $contact = Contacto::create($request->except('captcha'));
            // Enviar correo
            Mail::to($request['mail'])->send(new ParNetMail($contact));
            if (Mail::failures())
                return response('Lo sentimos, vuelva a intentarlo en un momento');
    
            return response()->json($contact);
        }
    }
}
