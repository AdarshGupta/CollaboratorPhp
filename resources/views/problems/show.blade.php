@extends('layouts.master')

@section('content')
	
	<h1>Dashboard</h1>
	
	<div class="card">
		<div class="card-body">
			<a href="/problems/{{ $problem->id }}" class="problemTitle">
				<h1>{{ $problem->summary }}</h1>
			</a>
			<p class="problemBody">
				{{ $problem->body }}
			</p>
		</div>
	</div>

@endsection