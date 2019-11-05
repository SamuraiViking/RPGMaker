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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('location', 'LocationsController@index');
Route::get('location/{location}', 'LocationsController@show');
Route::post('location', 'LocationsController@store');
Route::patch('location/{location}', 'LocationsController@update');
Route::delete('location/{location}', 'LocationsController@delete');
