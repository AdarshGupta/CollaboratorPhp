@extends('layouts.master')

@section('content')

	<h1>Register</h1>
	
	<div class="card">
		<div class="card-body">

			<form method="POST" action="/register">

				{{ csrf_field() }}
				
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" id="name" name="name" required>
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>

				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>

				<div class="form-group">
					<label for="password">Password Confirmation:</label>
					<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
					{{-- name and id need to be password_confirmation for auto. confirnation --}}
				</div>

				<div class="btn-group">
					<button type="submit" class="btn post-btn">Register</button>
				</div>

				@include('layouts.errors')
				
			</form>
		</div>
	</div>
@endsection