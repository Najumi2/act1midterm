<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


class remote extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'text' => 'required',
            'attach' => 'file|max:10240', 
        ]);

        $name = $request->input('name', 'Anonymous');
        $email = $request->input('email');
        $text = $request->input('text');
        $attachment = $request->file('attach');

        Mail::to('jadeestremera@thelewiscollege.edu.ph')->send(new ContactFormMail($name, $email, $text, $attachment));

        return redirect('/')->with('success', 'Your message has been sent successfully!');
    }
}

