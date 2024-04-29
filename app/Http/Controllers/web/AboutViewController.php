<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Stuffs;
use Illuminate\Http\Request;

class AboutViewController extends Controller
{
    //
    public function index()
    {
        return view('web.about',[
            'stuffs' => Stuffs::all(),
            'about' => About::first()
        ]);
    }
}
