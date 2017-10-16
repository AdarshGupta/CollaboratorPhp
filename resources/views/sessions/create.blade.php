@extends('layouts.master')

@section('content')

	<h1>Sign In</h1>

	<div class="card">
		<div class="card-body">

			<form method="POST" action="/login">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>

				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>


				<div class="btn-group">
					<button type="submit" class="btn post-btn">Sign In</button>
				</div>

				@include('layouts.errors')

			</form>
		</div>
	</div>

@endsection