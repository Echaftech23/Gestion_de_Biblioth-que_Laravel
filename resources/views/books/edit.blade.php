@extends('layouts.app')

@section('title', 'Edit Book')

@section('contents')
<h1 class="mb-0">Edit Book</h1>
<hr />
<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-3">
        <div class="col">
            <label class="form-label text-dark" for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $book->title }}" required>
        </div>
        <div class="col">
            <label class="form-label text-dark" for="author">Author</label>
            <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $book->author }}" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label text-dark" for="publication_year">Publication Year</label>
            <input type="date" name="publication_year" class="form-control" placeholder="published At" value="{{ $book->publication_year }}" required>
        </div>
        <div class="col">
            <label class="form-label text-dark" for="genre">Genre</label>
            <input type="text" name="genre" class="form-control" placeholder="Book Genre" value="{{ $book->genre }}" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label text-dark" for="total_copies">Total Copies</label>
            <input type="text" name="total_copies" class="form-control" placeholder="total Copies" value="{{ $book->total_copies }}" required>
        </div>
        <div class="col">
            <label class="form-label text-dark" for="available_copies">Available Copies</label>
            <input type="text" name="available_copies" class="form-control" placeholder="Available Copies" value="{{ $book->available_copies }}" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label text-dark" for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label text-dark" for="description">Descriptoin</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $book->description }}</textarea>
        </div>
    </div>
    <div class="row ml-1">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection
