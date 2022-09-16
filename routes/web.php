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

Route::get('/test',function(){
    return "This test URL";
});

Route::get('/apidocs',function(){
    return view('scribe.index');
});

Route::get('/scribe/postman',function(){
    return "test postman";
})->name('scribe.postman');

Route::get('/scribe/openapi',function(){
    return "test postman";
})->name('scribe.openapi');
