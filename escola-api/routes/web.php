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
    return '{"hello_url" : "/hello"}';
   });
   
   Route::get('/hello', function () {
    return "<p>Hello, World!</p> <p>Esta é apenas uma URL de teste.<p>";
   });