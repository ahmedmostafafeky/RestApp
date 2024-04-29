<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\Foods;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //

        $attributes = \request()->all();

        $attributes['photo'] = \request()->file('photo')->store('home/foods');
        Foods::create($attributes);
        return back()->with('status', 'Saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Foods $foods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        return view('adminpanel.home.food', [
            'food' => Foods::find($id)
        ]);
    }
    public function update(string $id) {
        $attributes = \request()->all();
        if (\request('photo'))
            $attributes['photo'] = \request()->file('photo')->store('home/foods');
        Foods::find($id)->update($attributes);
        return back()->with('status', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Foods::find($id)->delete();
        return back()->with('status', 'Deleted successfully!');
    }
}
