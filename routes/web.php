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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/friendships', 'IndexController@friendships')->name('index.friendships');
Route::get('/about', 'IndexController@about')->name('index.about');

Route::get('category/{category}', 'CategorysController@index')->name('category.index');
Route::get('triggers', 'TriggersController@show')->name('triggers.show');
Route::get('triggers/{trigger}', 'TriggersController@target')->name('triggers.target');
Route::get('triggers/{trigger}/favorite', 'TriggersController@favorite')->name('triggers.favorite');
Route::post('nominates', 'NominatesController@store')->name('nominates.store');
Route::post('proposals', 'ProposalsController@store')->name('proposals.store');