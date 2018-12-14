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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Catalog routes

Route::get('/catalogs', 'CatalogController@index')->name('catalogs.index');
Route::get('/catalogs/create', 'CatalogController@create')->name('catalogs.create');
Route::post('/catalogs/store', 'CatalogController@store')->name('catalogs.store');
Route::get('/catalogs/{catalog}', 'CatalogController@show')->name('catalogs.show');
Route::get('/catalogs/{catalog}/edit', 'CatalogController@edit')->name('catalogs.edit');
Route::put('/update/{catalog}', 'CatalogController@update')->name('catalogs.update');
Route::get('/delete/{catalog}', 'CatalogController@destroy')->name('catalogs.destroy');

// Task routes

Route::get('/catalogs/tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('/catalogs/tasks/store', 'TaskController@store')->name('tasks.store');
Route::get('/catalogs/tasks/{task}', 'TaskController@show')->name('tasks.show');
Route::get('/catalogs/tasks/{task}/edit', 'TaskController@edit')->name('tasks.edit');
Route::put('/update/tasks/{task}', 'TaskController@update')->name('tasks.update');
Route::get('/delete/tasks/{task}', 'TaskController@delete')->name('tasks.delete');