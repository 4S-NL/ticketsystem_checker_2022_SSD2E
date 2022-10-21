@extends('layouts.base')

@section('content')

    <h1>Create new Event</h1>
    @if ($errors)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('events.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Organisatie</label>
            <select class="form-control" name="organisation_id" id="">
                @foreach($orgs as $org)
                    <option value="{{$org->id}}">{{$org->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="">Start Date</label>
            <input class="form-control" type="datetime-local" name="start_date" id="">
        </div>

        <div class="form-group">
            <label for="">End Date</label>
            <input class="form-control" type="datetime-local" name="end_date" id="">
        </div>

        <div class="form-group">
            <label for="">Amount of tickets</label>
            <input class="form-control" type="number" name="amount_tickets" id="">
        </div>

        <div class="form-group">
            <label for="">Price per Ticket</label>
            <input class="form-control" type="text" name="price_per_ticket" id="">
        </div>

         <div class="form-group">
            <label for="">City</label>
            <input class="form-control" type="text" name="city" id="">
        </div>

         <div class="form-group">
            <label for="">Address</label>
            <input class="form-control" type="text" name="address" id="">
        </div>

        <div class="form-group">
            <label for="">ZIP code</label>
            <input class="form-control" type="text" name="zipcode" id="">
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <input class="form-control" type="text" name="category" id="">
        </div>

        <input class="btn btn-primary" type="submit" value="Create new Event">

    </form>

@endsection
