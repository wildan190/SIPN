<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('info@nuruliman.com') // Replace with your email
                ->subject('New Contact Message')
                ->replyTo($data['email']);
        });


        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
