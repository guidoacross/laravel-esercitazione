<?php

use Illuminate\Http\Request;

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'Api\Auth\LoginControlle@login');
});

Route::post('login', 'Api\Auth\LoginController@login');
//user
Route::apiResource('users','Api\UserController');
//message
Route::apiResource('messages', 'Api\MessageController');
//type
Route::apiResource('types', 'Api\TypeController');


//page not found
Route::fallback(function () {
    return response()->json([
            'message' => 'Page Not Found. If error persists, contact ste.samu@across.it'
        ], 404);
});