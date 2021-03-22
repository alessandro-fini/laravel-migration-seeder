@extends('layouts.app')
@section('title', 'Passenger details')
@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Birth date</th>
                    <th scope="col">Address</th>
                    <th scope="col">Country</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Ticket price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $passenger->id }}</th>
                    <td>{{ $passenger->birth_date }}</td>
                    <td>{{ $passenger->address }}</td>
                    <td>{{ $passenger->country }}</td>
                    <td>{{ $passenger->phone }}</td>
                    <td>{{ $passenger->price }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection