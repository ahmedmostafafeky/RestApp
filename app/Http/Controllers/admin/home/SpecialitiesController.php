<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Specialitie;
use Illuminate\Http\Request;

class SpecialitiesController extends Controller
{
    //
    public function store()
    {
        $attributes = \request()->validate([
            'title' => "",
            'paragraph' => "",
            'photo' => "image"
        ]);
        $attributes['photo'] = \request()->file('photo')->store('home/specialities');
        Specialitie::create($attributes);
        return back()->with('status', 'Saved successfully!');
    }
    public function destroy(string $id) {
        Specialitie::find($id)->delete();
        return back()->with('status', 'Deleted successfully!');
    }
    public function edit($id) {
        return view('adminpanel.home.specialities', [
            'specialities' => Specialitie::find($id)
        ]);
    }
    public function update(string $id) {
        $attributes = \request()->all();
        if (\request('photo'))
            $attributes['photo'] = \request()->file('photo')->store('home/specialities');
        Specialitie::find($id)->update($attributes);
        return back()->with('status', 'Updated successfully!');
    }
}
