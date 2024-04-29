<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Mail\MessageEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactViewController extends Controller
{
    //
    public function index()
    {
        return view('web.contact', [
            'contacts' => Contact::all()
        ]);

    }
    public function store() {

        $data = \request()->all();
        Mail::to(Contact::find('3')['value'])->send(new MessageEmail($data));
        return back()->with('status', 'The Mail Sent successfully!');
    }
}
