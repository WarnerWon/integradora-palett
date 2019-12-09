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

Route::post('login_mobile', 'Api\AuthController@login_mobile');
Route::get('productosIndex', 'Api\GetController@productosIndex');
Route::get('ordenesIndex', 'Api\GetController@ordenesIndex');
Route::get('materialesIndex', 'Api\GetController@materialesIndex');
Route::get('notification', 'Api\GetController@notification');
