<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\Testinomial;
use Illuminate\Http\Request;

class TestinomialController extends Controller
{
    //
    public function store() {
        $attributes = \request()->validate([
            'name'=> "",
            'paragraph' => "",
            'rate' => "min:1|max:5"
        ]);
        Testinomial::create($attributes);
        return back()->with('status', 'Saved successfully!');
    }

    public function destroy(string $id) {
        Testinomial::find($id)->delete();
        return back()->with('status', 'Deleted successfully!');
    }

    public function edit($id) {
        return view('adminpanel.home.testinomial', [
            'testinomial' => Testinomial::find($id)
        ]);
    }

    public function update(string $id) {
        Testinomial::find($id)->update(\request()->all());
        return back()->with('status', 'Updated successfully!');
    }
}
