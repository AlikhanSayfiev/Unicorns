<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', function () {
        $lang = \App\Models\Language::where('code', app()->getLocale())->where('status', 'published')->first();
        if (!$lang) return abort(404);
        return view('home', [
            'block1' => $lang->titles->where('block', 1)->where('status', 'published')->first(),
            'block2' => $lang->titles->where('block', 2)->where('status', 'published')->first(),
            'block3' => $lang->titles->where('block', 3)->where('status', 'published')->first(),
            'block4' => $lang->titles->where('block', 4)->where('status', 'published')->first(),
            'block5' => $lang->titles->where('block', 5)->where('status', 'published')->first(),
            'block6' => $lang->titles->where('block', 6)->where('status', 'published')->first(),
            'block7' => $lang->titles->where('block', 7)->where('status', 'published')->first(),
            'block8' => $lang->titles->where('block', 8)->where('status', 'published')->first(),
            'block9' => $lang->titles->where('block', 9)->where('status', 'published')->first(),
            'block10' => $lang->titles->where('block', 10)->where('status', 'published')->first(),
            'block11' => $lang->titles->where('block', 11)->where('status', 'published')->first(),
            'block12' => $lang->titles->where('block', 12)->where('status', 'published')->first(),
            'menus' => $lang->menus->where('status', 'published'),
            'formats' => $lang->formats->where('status', 'published'),
            'settings' => $lang->settings->first(),
            'opinions' => $lang->opinions,
            'syndicats' => $lang->syndicats->where('status', 'published'),
            'services' => $lang->services->where('status', 'published'),
            'news' => $lang->blogs->where('status', 'published'),
            'followers' => \App\Models\Follower::where('status', 'published')->get(),
        ]);
    });

    Route::get('/form', function () {
        $lang = \App\Models\Language::where('code', app()->getLocale())->where('status', 'published')->first();
        if (!$lang) return abort(404);
        return view('form', [
            'block1' => $lang->titles->where('block', 1)->where('status', 'published')->first(),
            'menus' => $lang->menus->where('status', 'published'),
            'settings' => $lang->settings->first()
        ]);
    });
});

//Route::match(['get'], 'auth/login', [AuthController::class, 'login'])->name("login");

Route::get('/{any?}', [AuthController::class, 'index'])->where('any', '^(?!api).*$');