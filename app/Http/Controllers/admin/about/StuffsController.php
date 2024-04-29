<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Models\Stuffs;

class StuffsController extends Controller
{

    public function destroy(string $id) {
        Stuffs::find($id)->delete();
        return back()->with('status', 'Deleted successfully!');
    }

    public function store() {
        $attributes = \request()->validate([
            'name' => "",
            'job_title' => "",
            'description' => "",
            'category' => "",
            'photo' => "image"
        ]);
        $attributes['photo'] = \request()->file('photo')->store('stuff');
        Stuffs::create($attributes);
        return back()->with('status', 'Saved successfully!');
    }

    public function edit(string $id) {
        $stuff = Stuffs::find($id);
        return view('adminpanel.about.update',['stuff' => $stuff]);
    }
    public function update(string $id){
        $attributes = request()->all();
        if (\request('photo'))
            $attributes['photo'] = \request()->file('photo')->store('stuff');
        Stuffs::find($id)->update($attributes);
        return back()->with('status', 'Updated successfully!');
    }
}
