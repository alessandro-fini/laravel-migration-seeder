@extends('layouts.app')
@section('title', 'Passengers list')
@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Passenger id</th>
                    <th scope="col">Train Car</th>
                    <th scope="col">info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($passengers as $passenger)
                <tr>
                    <th scope="row">{{ $passenger->id }}</th>
                    <td>{{ $passenger->name }}</td>
                    <td>{{ $passenger->passenger_id }}</td>
                    <td>{{ $passenger->train_car }}</td>
                    <td>
                        <button type="button" class="btn btn-info">
                            <a href="{{ route('passengers.show', $passenger->id) }}" class="text-white text-decoration-none">details</a>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection