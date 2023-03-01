<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //dispaly mail
    public function contactIndex()
    {
        return view('emails.contact');
    }

    public function sendContactMail(ContactRequest $request)
    {
        

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        Mail::to('info@segnau.org.ng')->send(new ContactMail($details));

        return back()->with('success', 'Your message has been sent successfully');
    }
}
