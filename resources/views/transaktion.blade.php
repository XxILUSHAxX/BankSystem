@extends('welcome')

@section('content')
    <div class="container justify-content-center">
        <h1>Send money</h1>
        <form action="/send/transaktion" method="post">
            @csrf
            <div class="form-group">
                <label>Empfaenger</label>
                <input type="email" class="form-control" id="empfaengerEmail" aria-describedby="emailHelp"
                    placeholder="test@test.com">
            </div>
            <br>
            <div class="form-group">
                <label>Amount</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="12.00">
                    <div class="input-group-append">
                        <span class="input-group-text">€</span>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection
