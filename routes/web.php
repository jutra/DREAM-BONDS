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

Route::get('/test', function () {
    return view('test');
});



Route::get('/home','HomeController@desvio');


Auth::routes();

Route::get('/faq', 'homeController@faq');
Route::post('/proyectos', 'proyectController@create')->name('proyect');
Route::get('/proyectos', 'HomeController@proyectos');
Route::get('/perfil', 'proyectController@proyectList')->name('perfil');
Route::delete('delete_Proyect/{id}', 'proyectController@destroy')->name('borrado');


Route::get('/error', 'HomeController@error');
Route::get('/logout', 'HomeController@logout');
