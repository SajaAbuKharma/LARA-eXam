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

Route::any(uri: 'answer' ,function () {
    return view( view:'answer');
});
Route::any(uri: 'question' ,function () {
    return view( view:'question');
});
Route::any(uri: 'start' ,function () {
    return view( view:'start');
});

Route::any(uri: 'end' ,function () {
    return view( view:'end');
});
Route::any(uri: 'add', action:('QuestionController@add');
