@extends('layouts.master')

@section('content')

    <h1>Problems</h1>

    

    @foreach ($problems as $problem)

        <div class="card">
          <div class="card-body">
            <a href="/problems/{{ $problem->id }}" class="problemTitle">
                <h4>{{ $problem->summary }}</h4>
            </a>
            <hr>
            <p class="problemBody">
                {{ $problem->body }}
            </p>
          </div>
        </div>
               
    @endforeach

@endsection