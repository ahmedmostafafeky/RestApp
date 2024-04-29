<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function store() {
        $attributes = \request()->validate([
            'title' => "",
            'paragraph' => "",
            'cta' => "",
            'photo' => "image"
        ]);
        $attributes['photo'] = \request()->file('photo')->store('home/slider');
        Slider::create($attributes);
        return back()->with('status', 'Saved successfully!');
    }
    public function destroy(string $id)
    {
        Slider::find($id)->delete();
        return back()->with('status', 'Deleted successfully!');
    }
    public function edit($id) {
        return view('adminpanel.home.slider', [
            'slider' => Slider::find($id)
        ]);
    }
    public function update(string $id) {
        $attributes = \request()->all();
        if (\request('photo'))
            $attributes['photo'] = \request()->file('photo')->store('home/slider');
        Slider::find($id)->update($attributes);
        return back()->with('status', 'Updated successfully!');
    }
}
