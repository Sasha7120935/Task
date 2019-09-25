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

Route:: get('ingredients','IngredientsController@index') ->name('ingredients');
Route::  get('recipes','RecipeController@index')->name('recipe.index');


Route::namespace('Account')->prefix('account')->name('account.')->middleware(['auth'])->group(function (){
    Route::get('{user}/edit','UserController@edit')->middleware('can:update,user')->name('user.edit');
    Route::put('{user}/edit','UserController@update')->middleware('can:update,user')->name('user.update');
    Route::get('/','UserController@index')->name('main');
});