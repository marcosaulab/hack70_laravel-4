<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactPage() {

        return view('contacts');

    }

    public function contactSend(Request $request) {

        $tuonome = $request->input('tuonome');
        $title = $request->input('title');
        $description = $request->input('description');

        // oggetto di tipo Mailable inizializzato con i valori che prendiamo dal
        $contactMail = new ContactMail($tuonome, $title, $description);

        // comando per inviare la mail con Laravel
        Mail::to('info@hack70.it')->send($contactMail);

        return redirect()->route('contact.thankyou');
    
    }

    public function thankYouPage() {
        return view('thankyoupage');
    }


}
