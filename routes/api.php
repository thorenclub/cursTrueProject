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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('users', function (Request $obRequest) {
    if ($obRequest->post('login') === null) {
        return json_encode(\App\User::all()->toArray());
    }
    return json_encode(\App\User::where(['login' => $obRequest->post('login')])->first());
});
