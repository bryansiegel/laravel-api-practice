<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');

    //Students API
    Route::get('students', 'ApiController@getAllStudents');
    Route::get('students/{id}', 'ApiController@getAllStudents');
    Route::post('students', 'ApiController@createStudent');
    Route::put('students{id}', 'ApiController@updateStudent');
    Route::delete('students/{id}', 'ApiController@deleteStudent');
});
