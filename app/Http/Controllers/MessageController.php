<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:5'
        ]);

        Mail::to('admin@example.com')->send(new MessageReceived($data));

        return back()->with('status', 'Mensaje enviado correctamente');
    }
}
