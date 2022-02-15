<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'content' => 'required'
            ],
            [
                'email.email' => 'El correo electrónico no es válido.',
                'content.required' => 'El campo mensaje es obligatorio.'
            ]
        );

        Mail::to('admin@example.com')->send(new MessageReceived($data));

        return back()->with('status', 'Mensaje enviado correctamente');
    }
}
