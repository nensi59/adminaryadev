<?php

use Illuminate\Support\Facades\Route;




Route::group(["middleware" => "auth"],function(){
    Route::resource('insert_product','add_product');
    Route::resource('view_product','view_product_admin');
  
});

Auth::routes();
Route::get('logout','Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');


