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
						{{ $solution->user->name }} ({{ $solution->created_at->diffForHumans() }}): &nbsp;
					</strong>
					{{ $solution->body }}	
				</li>

			@endforeach

		</ul>
	</div>

	
	{{-- Add a comment --}}
	{{-- Show only if user logged in --}}
	@if (Auth::check())

		<hr>
		
		<div class="card">
			<div class="card-body">
				<form method="POST" action="/problems/{{ $problem->id }}/solutions">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" placeholder="Your solution here" class="form-control" required></textarea>
					</div>

					<div class="btn-group">
						<button type="submit" class="btn post-btn">Post It!</button>
					</div>

					@include('layouts.errors')
				</form>
			</div>
		</div>

	@endif
@endsection