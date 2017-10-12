@extends('layouts.master')

@section('content')
	
	<h1>Problem & Solutions</h1>
	
	<div class="card">
		<div class="card-body">
			<span class="showProblem">
				<h3>{{ $problem->summary }}</h3>
			</span>
			<hr>
			<p class="problemBody">
				{{ $problem->body }}
			</p>
		</div>
	</div>

	<h2 class="solutions-suggested">Suggested Solutions</h2>

	<div class="solutions">
		<ul class="list-group">
			@foreach($problem->solutions as $solution)
			<li class="card list-group-item">
				<strong>
					{{ $solution->created_at->diffForHumans() }}: &nbsp;
				</strong>
				{{ $solution->body }}	
			</li>
			@endforeach
		</ul>
	</div>

@endsection