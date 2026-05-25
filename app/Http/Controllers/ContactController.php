<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);

        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('YOUR_EMAIL@gmail.com')
                    ->subject('Portfolio Contact Form')
                    ->replyTo($request->email, $request->name);
        });

        return back()->with('success', 'Message sent successfully!');
    }
}