<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\Stuffs;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminpanel.services.index', ['services' => Services::all()]);
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
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => "",
            'desc' => "",
            'photo' => "image"
        ]);
        $attributes['photo'] = $request->file('photo')->store('services');
        Services::create($attributes);
        return back()->with('status', 'Saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('adminpanel.services.update',['service' => Services::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $attributes = $request->all();
        if ($request->has('photo'))
            $attributes['photo'] = $request->file('photo')->store('service');
        Services::find($id)->update($attributes);
        return back()->with('status', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Services::find($id)->delete();
        return back()->with('status', 'Deleted successfully!');
    }
}
