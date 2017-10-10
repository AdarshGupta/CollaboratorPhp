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

Route::get('/problems', function () {
	$problems = DB::table('problems')->get();
    return view('problems.index', compact('problems'));
});

Route::get('/problems/{problem}', function ($id) {
	$problem = DB::table('problems')->find($id);
    return view('problems.show', compact('problem'));
});
