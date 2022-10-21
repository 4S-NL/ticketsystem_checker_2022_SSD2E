@extends('layouts.base')

@section('content')
    <h1>This is the about page!</h1>
    <h2>Occupation: {{$me['occupation'] }} </h2>
    <ul>
        @foreach($names as $name)
            <li> {{$name}} </li>
        @endforeach
    </ul>

    <h3>Grades:</h3>
    <ul>
        @foreach($grades as $key => $value)
            <li>{{$key}}: {{$value}}</li>
        @endforeach
    </ul>
@endsection
