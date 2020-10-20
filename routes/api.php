<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ExampleProjectController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\FormatSyndicateController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\TitleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {

    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AuthController::class, 'login']);
    });

    Route::middleware('auth.jwt')->group(function () {
        Route::post('auth/logout', [AuthController::class, 'logout']);
        Route::get('refresh', [AuthController::class, 'refresh']);
        Route::get('user', [AuthController::class, 'user']);

        Route::get('languages', [LanguageController::class, 'index']);
        Route::get('menus', [MenuController::class, 'index']);
        Route::get('titles', [TitleController::class, 'index']);
        Route::get('formats', [FormatController::class, 'index']);
        Route::get('opinions', [OpinionController::class, 'index']);
        Route::get('syndicates', [FormatSyndicateController::class, 'index']);
        Route::get('services', [ServiceController::class, 'index']);
        Route::get('partners', [PartnerController::class, 'index']);
        Route::get('statistics', [StatisticController::class, 'index']);
        Route::get('blogs', [BlogController::class, 'index']);
        Route::get('followers', [FollowerController::class, 'index']);
        Route::get('projects', [ExampleProjectController::class, 'index']);
        Route::get('settings', [SettingsController::class, 'index']);



        Route::post('menu/create', [MenuController::class, 'create']);
        Route::post('title/create', [TitleController::class, 'create']);
        Route::post('format/create', [FormatController::class, 'create']);
        Route::post('opinion/create', [OpinionController::class, 'create']);
        Route::post('syndicate/create', [FormatSyndicateController::class, 'create']);
        Route::post('service/create', [ServiceController::class, 'create']);
        Route::post('partner/create', [PartnerController::class, 'create']);
        Route::post('statistic/create', [StatisticController::class, 'create']);
        Route::post('blog/create', [BlogController::class, 'create']);
        Route::post('follower/create', [FollowerController::class, 'create']);
        Route::post('project/create', [ExampleProjectController::class, 'create']);



        Route::post('menu/{id}/update', [MenuController::class, 'update']);
        Route::post('title/{id}/update', [TitleController::class, 'update']);
        Route::post('format/{id}/update', [FormatController::class, 'update']);
        Route::post('opinion/{id}/update', [OpinionController::class, 'update']);
        Route::post('syndicate/{id}/update', [FormatSyndicateController::class, 'update']);
        Route::post('service/{id}/update', [ServiceController::class, 'update']);
        Route::post('partner/{id}/update', [PartnerController::class, 'update']);
        Route::post('statistic/{id}/update', [StatisticController::class, 'update']);
        Route::post('blog/{id}/update', [BlogController::class, 'update']);
        Route::post('follower/{id}/update', [FollowerController::class, 'update']);
        Route::post('project/{id}/update', [ExampleProjectController::class, 'update']);
        Route::post('settings/{id}/update', [SettingsController::class, 'update']);


        Route::delete('menu/{id}/delete', [MenuController::class, 'delete']);
        Route::delete('title/{id}/delete', [TitleController::class, 'delete']);
        Route::delete('format/{id}/delete', [FormatController::class, 'delete']);
        Route::delete('opinion/{id}/delete', [OpinionController::class, 'delete']);
        Route::delete('syndicate/{id}/delete', [FormatSyndicateController::class, 'delete']);
        Route::delete('service/{id}/delete', [ServiceController::class, 'delete']);
        Route::delete('partner/{id}/delete', [PartnerController::class, 'delete']);
        Route::delete('statistic/{id}/delete', [StatisticController::class, 'delete']);
        Route::delete('blog/{id}/delete', [BlogController::class, 'delete']);
        Route::delete('follower/{id}/delete', [FollowerController::class, 'delete']);
        Route::delete('project/{id}/delete', [ExampleProjectController::class, 'delete']);
    });
 
});