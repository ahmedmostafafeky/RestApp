<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Settings;

class ContactController extends Controller
{

    public function index() {
        return view('adminpanel.contact.index' , ['contacts' => Contact::all()]);
    }

    public function update() {
        $attributes = \request()->validate([
            'facebook' => "",
            'twitter' => "",
            'email' => "email",
            'phone' => "",
            'address' => ""
        ]);

        Contact::find(1)->update(['value' => $attributes['facebook']]);
        Contact::find(2)->update(['value' => $attributes['twitter']]);
        Contact::find(3)->update(['value' => $attributes['email']]);
        Contact::find(4)->update(['value' => $attributes['phone']]);
        Contact::find(5)->update(['value' => $attributes['address']]);

        return back()->with('status', 'Updated successfully!');
    }
    public function show(string $id)
    {
        //
    }
}
