<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Facts;
use App\Models\Foods;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Specialitie;
use App\Models\Stuffs;
use App\Models\Testinomial;

class HomeViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('web.home', [
            'sliders' => Slider::all(),
            'specialities' => Specialitie::all(),
            'stuffs' => Stuffs::all(),
            'testinomials' => Testinomial::all(),
            'facts' => Facts::first(),
            'menus' => Menu::all(),
            'foods' => Foods::all()
        ]);
    }
}
