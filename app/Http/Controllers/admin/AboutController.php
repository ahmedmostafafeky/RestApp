<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Settings;
use App\Models\Stuffs;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
        $this->middleware('guest')->only('show');
    }
    //
    public function index() {
        return view('adminpanel.about.index',[
            'stuffs' => Stuffs::all(),
            'about' => About::first(),
        ]);
    }

    public function destroy(string $id) {

    }

    public function store() {

    }

    public function edit(string $id) {

    }
    public function update(){
        About::first()->update(\request()->all());
        return back()->with('status', 'Updated successfully!');
    }
    public function show()
    {
    }
}
