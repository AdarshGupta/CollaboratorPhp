@extends('layouts.master')

@section('content')
	<h1>Post your problem</h1>

	<div class="card">
		<div class="card-body">
			<form method="POST" action="/problems">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="summary">Problem Summary:</label>
					<input type="text" class="form-control" id="summary" name="summary" >
				</div>

				<div class="form-group">
					<label for="body">Description (in Detail)</label>
					<textarea name="body" id="body" class="form-control" ></textarea>
				</div>

				<div class="btn-group">
					<button type="submit" class="btn post-btn">Post It!</button>
				</div>


				@include('layouts.errors')

			</form>
		</div>
	</div>

@endsection