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

//login
Route::post('/login', 'Api\Auth\LoginController@login');
//user's create
Route::post('/users', 'Api\UserController@store');

//protected routes
Route::group(['middleware' => ['jwt.verify']], function () {
    //refresh jwt token
    Route::get('/refresh', 'Api\Auth\LoginController@refresh');
    //search
    Route::post('/search', 'Api\SearchController@filter');
    //user
    Route::apiResource('/users','Api\UserController', ['except'=> ['store']]);
    //message
    Route::apiResource('/messages', 'Api\MessageController');
    //type
    Route::apiResource('/types', 'Api\TypeController');
});


//page not found
Route::fallback(function () {
    return response()->json([
            'message' => 'Page Not Found. If error persists, contact ste.samu@across.it'
        ], 404);
});