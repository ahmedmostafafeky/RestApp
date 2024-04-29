<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Specialitie;
use Illuminate\Http\Request;

class MenuController extends Controller
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
    public function store(Request $request)
    {
        Menu::create($request->all());
        return back()->with('status', 'Saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    public function edit($id) {
        return view('adminpanel.home.menu', [
            'menu' => Menu::find($id)
        ]);
    }
    public function update(string $id) {
        Menu::find($id)->update(\request()->all());
        return back()->with('status', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Menu::find($id)->delete();
        return back()->with('status', 'Deleted successfully!');

    }
}
