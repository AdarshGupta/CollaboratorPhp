<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
	public function create()
	{
		return view('registration.create');
	}

	public function store()
	{
		// Validating the form
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|unique:users|email',
			'password' => 'required|confirmed' // checks for password_confirmation == password
		]);

		//create the user
		$user = User::create([
			'name' => request('name'),
			'email' => request('email'),
			'password' => bcrypt(request('password'))
		]);

		// Sign in the user
		auth()->login($user);

		\Mail::to($user)->send(new Welcome($user));

		// Redirect to the homepage.
		return Redirect('/');
	}
}
