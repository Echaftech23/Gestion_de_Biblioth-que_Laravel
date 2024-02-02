@extends('layouts.app')

@section('title', 'Create Book')

@section('contents')
<h1 class="mb-0">Add Reservation</h1>
<hr />
<form class="d-flex justify-content-center" action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label text-dark" for="description">Book Title</label>
                <input type="text" id="description" name="description" class="form-control" placeholder="Enter Reservation Description" required>
            </div>
            <div class="col">
                <label class="form-label text-dark" for="name">Username</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Author Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label text-dark" for="	reservation_date">Reservation Date</label>
                <input type="date" id="reservation_date" name="reservation_date" class="form-control" required min="{{ now()->format('Y-m-d') }}">
            </div>
            <div class="col">
                <label class="form-label text-dark" for="	return_date">Return Date</label>
                <input type="date" id="	return_date" name="	return_date" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label text-dark" for="description">Descriptoin</label>
                <textarea rows="4" id="description" class="form-control" name="description" placeholder="Add Book Descriptoin"></textarea>
            </div>
        </div>

        <div class="row ml-1">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
</form>
@endsection
