@extends('layouts.base')
@section('content')
    <h1>All events!</h1>

    @if(session('message'))
        {{ session('message') }}
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Amount of tickets</th>
                <th>Ticket price</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td><a href="{{route('events.show', $event->id)}}">{{$event->title}}</a></td>
                    <td>{{$event->start_date }}</td>
                    <td>{{$event->end_date }}</td>
                    <td>{{$event->amount_tickets }}</td>
                    <td>{{$event->price_per_ticket }}</td>
                    <td><a href="{{ route('events.edit', $event) }}" class="btn btn-info">Edit</a></td>
                    <td>
                        <form action="{{route('events.destroy', $event)}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="X" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <ul>

    </ul>
    <a class="btn btn-primary" href="{{route('events.create')}}">Create new Event</a>
@endsection
