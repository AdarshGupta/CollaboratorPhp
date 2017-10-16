<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	// Attemppt to authenticate the user
    	if(! auth()->attempt(request(['email', 'password']))) //attempt() automatically signs in the user
    	{
    		// Can't sign in
    		return back()->withErrors([
    			'message' => 'Please check your credentials and try again.'
    		]);
    	}

    	// Else the user has signed in.
    	//Redirect to the homepage
    	return Redirect('/');
    }

    public function destroy()
    {
    	auth()->logout();
    	return Redirect('/');
    }
}
