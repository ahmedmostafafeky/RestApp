<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;

class SettingsController extends Controller
{
    //

    public function index() {
        return view('adminpanel.settings.index', ['settings' => Settings::first()]);
    }

    public function update() {
        $attributes = \request()->validate([
            'site_title' => "",
            'site_logo' => "image",
            'fav_icon' => "image",
            'alt' => "",
            'meta_desc' => "",
            'cope_rights' => "",
        ]);
        if(\request('site_logo'))
            $attributes['site_logo'] = \request()->file('site_logo')->store('settings/siteLogo');
        if(\request('fav_icon'))
            $attributes['fav_icon'] = \request()->file('fav_icon')->store('settings/favIcons');

        Settings::first()->update($attributes);
        return back()->with('status', 'Updated successfully!');
    }

}
