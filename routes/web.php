<?php

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
});

Route::post('game/show', function () {
    return 'The list of games';
});
Route::get('game/{game}', function ($game) {
    return 'Game statistics';
});

Route::resource('course', "CourseController", ['only' => ['index', 'create', 'store', 'show', 'destroy']]);

Route::get('course', 'CourseController@index');
Route::get('course/create', 'CourseController@create');
