<?php

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
Route::get('/helo', function () {
    // return view('welcome');
      return 'heloo'; 
});
Route::get('/oindexu','PagesContorller@index'); //preko kontorlera

Route::get('/korisnik/{id}/{ime}', function ($id, $ime) {
    // return view('welcome'); 
    return 'id je '.$id.' sa imenom '.$ime; 
});