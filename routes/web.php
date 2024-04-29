<?php

use App\Http\Controllers\admin\about\StuffsController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AdduserController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\home\FactsController;
use App\Http\Controllers\admin\home\FoodsController;
use App\Http\Controllers\admin\home\MenuController;
use App\Http\Controllers\admin\home\SliderController;
use App\Http\Controllers\admin\home\SpecialitiesController;
use App\Http\Controllers\admin\home\TestinomialController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\web\AboutViewController;
use App\Http\Controllers\web\ContactViewController;
use App\Http\Controllers\web\HomeViewController;
use App\Http\Controllers\web\ServicesViewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/admin', fn() => redirect('/login'));

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function() {
    Route::resource('/admin/home', HomeController::class) ->names('home');

    Route::resource('/admin/home/slider', SliderController::class)->names('slider');
    Route::resource('/admin/home/specialities', SpecialitiesController::class)->names('specialities');
    Route::resource('/admin/home/testinomial', TestinomialController::class)->names('testinomials');
    Route::resource('/admin/home/facts', FactsController::class)->names('facts');
    Route::resource('/admin/home/menus', MenuController::class)->names('menus');
    Route::resource('/admin/home/foods', FoodsController::class)->names('foods');



    Route::resource('/admin/about/stuff',StuffsController::class)->names('stuffs');
    Route::resource('/admin/contacts', ContactController::class)->names('contacts');
    Route::resource('/admin/settings', SettingsController::class)->names('settings');
    Route::resource('/admin/services', ServicesController::class)->names('services');
    Route::resource('/admin/adduser',AdduserController::class)->names('adduser');
});

Route::resource('/admin/about', AboutController::class) -> names('about');

Route::resource('/', HomeViewController::class) ->names('homeView');
Route::resource('/contact', ContactViewController::class) ->names('contactsView');
Route::resource('/about', AboutViewController::class) ->names('aboutsView');
Route::resource('/services', ServicesViewController::class) ->names('servicesView');
