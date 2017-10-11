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

    public function show($id)
    {
    	$problem = Problem::find($id);
    	return view('problems.show', compact('problem'));
    }
}
