@extends('layouts.app')

@section('title', 'Create Book')

@section('contents')
<h1 class="mb-0">Add Book</h1>
<hr />
<form class="d-flex justify-content-center" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label text-dark" for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Enter Book Title" required>
            </div>
            <div class="col">
                <label class="form-label text-dark" for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" placeholder="Enter Author Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label text-dark" for="publication_year">Publication Year</label>
                <input type="date" id="publication_year" name="publication_year" class="form-control" required>
            </div>
            <div class="col">
                <label class="form-label text-dark" for="genre">Genre</label>
                <input type="text" id="genre" name="genre" class="form-control" placeholder="Enter Genre" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label text-dark" for="total_copies">Total Copies</label>
                <input type="number" id="total_copies" name="total_copies" class="form-control" placeholder="Total copies" required>
            </div>
            <div class="col">
                <label class="form-label text-dark" for="available_copies">Available Copies</label>
                <input type="number" id="available_copies" name="available_copies" class="form-control" placeholder="available copies" required>
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
                <textarea rows="4" id="description" class="form-control" name="description" placeholder="Add Book Descriptoin"></textarea>
            </div>
        </div>

        <div class="row ml-1">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
</form>
@endsection
