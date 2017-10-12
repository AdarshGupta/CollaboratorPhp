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

@endsection