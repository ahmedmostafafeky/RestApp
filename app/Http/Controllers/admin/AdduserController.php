<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdduserController extends Controller
{
    //
    public function index()
    {
        return view('adminpanel.newuser.newuser',[
           'users' => User::all()
        ]);
    }
    public function store() {
        $attributes = \request()->all();
        User::create($attributes);
        return back()->with('status', 'Saved successfully!');
    }
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return back()->with('status', 'Deleted successfully!');
    }
}
