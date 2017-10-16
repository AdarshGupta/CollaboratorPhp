<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problem;

class ProblemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
    	$problems = Problem::inRandomOrder()->get();
    	return view('problems.index', compact('problems'));
    }

    public function show(Problem $problem) 
    {
    	//// The variable name $problem should match with wildcard in the route in web.php (URI segment) or else it won't work. It does autom. Tfinds by ID matching problem
    	//$problem = Problem::find($id);
    	return view('problems.show', compact('problem'));
    }

    public function create()
    {
        return view('problems.create');
    }

    public function store()
    {
        // Input validation - server side
        $this->validate(request(), [
            'summary' => 'required',
            'body' => 'required'
        ]);

        // Problem::create([
        //     'summary' => request('summary'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]);
        // OR
        auth()->user()->publish(
            new Problem(request(['summary', 'body']))
        );

        //then redirect to homepage
        return redirect('/problems');
    }
}
