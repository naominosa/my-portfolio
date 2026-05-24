<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller {

    public function index() {
        return view('portfolio');
    }

    public function contact(Request $request) {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        Contact::create($request->only('name', 'email', 'message'));

        Mail::to('yourname@gmail.com')->send(
            new ContactMail(
                $request->name,
                $request->email,
                $request->message
            )
        );

        return back()->with('success', 'Message sent! I\'ll get back to you soon. ✦');
    }
}