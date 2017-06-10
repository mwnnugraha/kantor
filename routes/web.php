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

Route::get('','prakerincontroller@percobaan');

Route::get('halaman/{id}','prakerincontroller@param');

//Route::get('/{a}','prakerincontroller@parameter');

//Route::get('coba','CobaController@test');
Route::get('test/{id}','CobaController@test2');

Route::get('bebas','CobaController@test3');

Route::get('bebas','CobaController@ulang');

Route::get('nyobi','CobaController@binatang');
Route::get('nyoba','CobaController@kendaraan');
Route::get('nyobian','CobaController@laptop');
Route::get('/{data}','CobaController@ff');