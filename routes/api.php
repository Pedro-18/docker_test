<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::any('bar', function (){
    return "这是来自任何HTTP谓词的请求";
});*/

/*Route::get('users/{user}', function (\App\Models\User $user){
    return $user;
});*/

Route::get('profile/{user}', function(App\Models\User $user) {
    return $user;
});

