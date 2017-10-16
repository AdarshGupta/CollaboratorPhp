<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problem;
use App\Solution;

class SolutionsController extends Controller
{
	public function store(Problem $problem)
	{
		$this->validate(request(), [
			'body' => 'required|min:2'
		]);

		$problem->addSolution(request('body'), \Auth::user()->id); // Method called in Problem.php model

		return back(); //Redirect
	}
}
