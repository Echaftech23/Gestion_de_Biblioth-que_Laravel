@extends('layouts.app')

@section('title', 'Home Reservation')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Reservation</h1>
    <a href="{{ route('reservations.create') }}" class="btn btn-info">Add Reservation</a>
</div>
<hr />
@if(Session::has('success'))
<div class="d-flex flex-column-reverse align-items-end">
    <div class="alert alert-success col-4" role="alert">
        {{ Session::get('success') }}
    </div>
</div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Customer</th>
            <th>Book Title</th>
            <th>Reservation Date</th>
            <th>Return Date</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($reservation->count() > 0)
        @foreach($reservation as $res)
        <tr>
            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $res->name }}</td>
            <td class="align-middle">{{ (strlen($res->title) > 15 ? substr($res->title, 0, 15) . '....' : $res->title) }}</td>
            <td class="align-middle">{{ $res->reservation_date }}</td>
            <td class="align-middle">{{ $res->return_date }}</td>
            <td class="align-middle">{{ (strlen($res->description) > 15 ? substr($res->description, 0, 15) . '....' : $res->description) }}</td>
            <td class="align-middle">{{ $res->is_returned }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('reservations.show', $res->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('reservations.edit', $res->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('reservations.destroy', $res->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Are You sure You want To Delete This Reservation?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">Reservation not found</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection
