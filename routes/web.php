<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
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
/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//REST API (use postman)
Route::get('/create', 'App\Http\Controllers\studentcontroller@store');
Route::get('/create/{id}', 'App\Http\Controllers\studentcontroller@getid');
Route::post('/add', 'App\Http\Controllers\studentcontroller@add');
Route::put('/update/{id}', 'App\Http\Controllers\studentcontroller@update');
Route::delete('/delete/{id}', 'App\Http\Controllers\studentcontroller@delete');*/

//AJAX
Route::get('/', [studentcontroller::class, 'dashboard']);
Route::get('students', [studentcontroller::class, 'index']);
Route::post('students',[studentcontroller::class,'store']);
Route::resource('students',studentcontroller::class);
Route::delete('delete-student/{id}', [studentcontroller::class, 'destroy']);
Route::get('students/edit-student/{id}', [studentcontroller::class, 'edit']);
Route::put('update-student/{id}', [studentcontroller::class, 'update']);