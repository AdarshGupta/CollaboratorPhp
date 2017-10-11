<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problem;

class ProblemsController extends Controller
{
    public function index()
    {
    	$problems = Problem::all();
    	return view('problems.index', compact('problems'));
    }

    public function show(Problem $problem) 
    {
    	//// The variable name $problem should match with wildcard in the route in web.php (URI segment) or else it won't work. It does autom. Tfinds by ID matching problem
    	//$problem = Problem::find($id);
    	return view('problems.show', compact('problem'));
    }
}
