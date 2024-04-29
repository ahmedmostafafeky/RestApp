<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesViewController extends Controller
{
    //
    public function index()
    {
        return view('web.services',[
            'services' => Services::all()
        ]);
    }
}
