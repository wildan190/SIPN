<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactEmail;
use Illuminate\Http\Request;

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

        // Dispatch the job to the queue (Redis will handle it)
        SendContactEmail::dispatch($data);

        return back()->with('success', 'Pesan berhasil dikirim! Kami akan merespon secepatnya.');
    }
}
