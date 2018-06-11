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
try {
    DB::connection()->getPdo();
} catch (\Exception $e) {
    die("Could not connect to the database.  Please check your configuration.".$e->getMessage());
}
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('bicicletas','BicicletaController');
Route::resource('marcas','MarcasController');
Route::resource('tipos','TiposController');