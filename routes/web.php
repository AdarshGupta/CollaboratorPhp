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

Route::get('/problems', 'ProblemsController@index');

// Put create before indvidual problem {problem}, it mididentfies
Route::get('/problems/create', 'ProblemsController@create');

Route::get('/problems/{problem}', 'ProblemsController@show');

// POST /problems  -- to submit post
Route::post('/problems', 'ProblemsController@store');
