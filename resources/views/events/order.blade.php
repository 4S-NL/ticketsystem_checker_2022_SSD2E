@extends('layouts.base')

@section('content')

    <h1>Order tickets for {{$event->title}}</h1>
    <form method="post" action="{{route('events.storeOrder', $event)}}">
        @csrf
        <div class="form-group">
            <label for="">How many tickets?</label>
            <input class="form-control" max="{{$event->amount_tickets}}" type="number" name="amount_tickets" id="amount-tickets">
        </div>

        <div class="form-group">
            <label for="">Selecteer uw betalingswijze</label>
            <select class="form-control" name="payment_method" id="">
                <option value=""></option>
                <option value="Credit Card">Credit Card</option>
                <option value="Ideal">Ideal</option>
                <option value="Sofort Banking">Sofort Banking</option>
                <option value="PayPal">PayPal</option>
            </select>
        </div>
        <p><b>Totaalprijs: <span id="total-price"></span></b></p>
        <div class="form-group mt-2">
            <input class="btn btn-primary" type="submit" value="Buy Tickets Now!">
        </div>
    </form>
    <script>
        let amountTicketsEl = document.getElementById('amount-tickets');
        let totalPriceEl = document.getElementById('total-price');

        amountTicketsEl.addEventListener('change', () => {
            totalPriceEl.innerHTML = amountTicketsEl.value * {{$event->price_per_ticket}}
        })
    </script>
@endsection
