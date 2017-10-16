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

// DELETE LATER
Route::get('/', 'ProblemsController@index');

Route::get('/problems', 'ProblemsController@index');

// Put create before indvidual problem {problem}, it mis-identfies.
//Because Laravel will try to match the route according to the ORDER of routes registered. Since there is no post with an id of 'create', you get your error.
Route::get('/problems/create', 'ProblemsController@create');

Route::get('/problems/{problem}', 'ProblemsController@show');

// POST /problems  -- to submit post
Route::post('/problems', 'ProblemsController@store');

// POST submit solutions
Route::post('/problems/{problem}/solutions', 'SolutionsController@store');

// User Authentication
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');