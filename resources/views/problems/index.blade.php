<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Collaborator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Welcome to Collaborator!</h1>
        <ul>
            @foreach ($problems as $problem) 
                <li>
                    <a href="/problems/{{ $problem->id }}">
                        {{ $problem->summary }}   
                    </a>
                    <hr>
                    {{ $problem->body }}
                </li>
            @endforeach
        </ul>
    </body>
</html>