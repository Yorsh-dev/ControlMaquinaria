<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validar la entrada del formulario
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'affair' => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Obtener los datos del formulario
        $data = $request->only('fullname', 'email', 'phone', 'affair', 'message');

        // Enviar el correo
        Mail::to('yorshyo123@gmail.com')->send(new ContactMail($data));

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', '¡Mensaje enviado con éxito!');
    
    }

    public function index()
    {
        return view('contact');
    }
}
