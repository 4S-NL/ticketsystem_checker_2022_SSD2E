@extends('layouts.base')

@section('content')

    <h1>Edit Event</h1>
    @if ($errors)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('events.update', $event)}}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="">Organisatie</label>
            <select class="form-control" name="organisation_id" id="">
                @foreach($orgs as $org)
                    <option @if($org->id == $event->organisation_id) selected @endif value="{{$org->id}}">{{$org->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Title</label>
            <input value="{{$event->title}}" type="text" name="title" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$event->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="">Start Date</label>
            <input value="{{$event->start_date}}" class="form-control" type="datetime-local" name="start_date" id="">
        </div>

        <div class="form-group">
            <label for="">End Date</label>
            <input value="{{$event->end_date}}" class="form-control" type="datetime-local" name="end_date" id="">
        </div>

        <div class="form-group">
            <label for="">Amount of tickets</label>
            <input value="{{$event->amount_tickets}}" class="form-control" type="number" name="amount_tickets" id="">
        </div>

        <div class="form-group">
            <label for="">Price per Ticket</label>
            <input value="{{$event->price_per_ticket}}" class="form-control" type="text" name="price_per_ticket" id="">
        </div>

         <div class="form-group">
            <label for="">City</label>
            <input value="{{$event->city}}" class="form-control" type="text" name="city" id="">
        </div>

         <div class="form-group">
            <label for="">Address</label>
            <input value="{{$event->address}}" class="form-control" type="text" name="address" id="">
        </div>

        <div class="form-group">
            <label for="">ZIP code</label>
            <input value="{{$event->zipcode}}" class="form-control" type="text" name="zipcode" id="">
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <input value="{{$event->category}}" class="form-control" type="text" name="category" id="">
        </div>

        <input class="btn btn-primary" type="submit" value="Create new Event">

    </form>

@endsection
