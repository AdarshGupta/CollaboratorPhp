@extends('layouts.master')

@section('content')
	
	<h1>Problem & Solutions</h1>
	
	<div class="card">
		<div class="card-body">
			<a href="/problems/{{ $problem->id }}" class="problemTitle">
				<h3>{{ $problem->summary }}</h3>
			</a>
			<hr>
			<p class="problemBody">
				{{ $problem->body }}
			</p>
		</div>
	</div>

@endsection