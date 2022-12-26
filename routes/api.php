<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/create', 'App\Http\Controllers\studentcontroller@store');
Route::get('/create/{id}', 'App\Http\Controllers\studentcontroller@getid');
Route::post('/add', 'App\Http\Controllers\studentcontroller@add');
Route::put('/update/{id}', 'App\Http\Controllers\studentcontroller@update');
Route::delete('/delete/{id}', 'App\Http\Controllers\studentcontroller@delete');
