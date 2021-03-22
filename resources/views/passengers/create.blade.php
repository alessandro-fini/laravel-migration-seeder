@extends('layouts.app')
@section('title', 'Add passenger')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('passengers.store') }}">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="input_name">Name</label>
            <input type="text" class="form-control" id="input_name" name="name">
        </div>
        <div class="form-group">
            <label for="input_date">Birth date</label>
            <input type="date" class="form-control" id="input_date" name="birth_date">
        </div>
        <div class="form-group">
            <label for="input_address">Address</label>
            <input type="text" class="form-control" id="input_address" name="address">
        </div>
        <div class="form-group">
            <label for="input_country">Country</label>
            <input type="text" class="form-control" id="input_country" name="country">
        </div>
        <div class="form-group">
            <label for="input_phone">Phone number</label>
            <input type="text" class="form-control" id="input_phone" name="phone">
        </div>
        <div class="form-group">
            <label for="input_id">Passenger ID</label>
            <input type="text" class="form-control" id="input_id" name="passenger_id">
        </div>
        <div class="form-group">
            <label for="input_car">Train car</label>
            <input type="text" class="form-control" id="input_car" name="train_car">
        </div>
        <div class="form-group">
            <label for="input_price">Ticket price</label>
            <input type="text" class="form-control" id="input_price" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection