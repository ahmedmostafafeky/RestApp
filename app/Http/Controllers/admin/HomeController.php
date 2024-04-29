<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Facts;
use App\Models\Foods;
use App\Models\Menu;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Specialitie;
use App\Models\Testinomial;
use Illuminate\Support\Facades\Request;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('adminpanel.home.index', [
            'sliders' => Slider::all(),
            'specialities' => Specialitie::all(),
            'testinomials' => Testinomial::all(),
            'facts' => Facts::first(),
            'menus' => Menu::all(),
            'foods' => Foods::all()
        ]);
    }
    public function show(string $id)
    {
        //
    }


}
