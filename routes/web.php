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


Auth::routes();
Route::get('/','HomeController@index');

Route::get('/task', 'TaskController@index')->name('home');
Route::post('/task/addtask',"TaskController@taskAddHandler")->name("taskaddhandler");
Route::get('/task/deletetask/{id}',"TaskController@taskDeleteHandler")->name("taskdelhandler");
Route::get('/task/edit/{id}',"TaskController@taskEdit")->name('taskedit');
Route::get('/task/edithandler',"TaskController@taskEditHandler")->name('taskedithandler');
