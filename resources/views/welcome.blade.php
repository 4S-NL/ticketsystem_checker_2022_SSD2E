@extends('layouts.base')

@section('content')
    <h1>Hello homepage!</h1>
    @auth
        <p>U bent ingelogd</p>
    @endauth
@endsection
