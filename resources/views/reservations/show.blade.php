@extends('layouts.app')

@section('title', 'Show Book')

@section('contents')
<h1 class="mb-0">Book Detail</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $book->title }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Author</label>
        <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $book->author }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Genre</label>
        <input type="text" name="genre" class="form-control" placeholder="Book Genre" value="{{ $book->genre }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Publication Year</label>
        <input type="text" name="publication_year" class="form-control" placeholder="published At" value="{{ $book->publication_year }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $book->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="publication_year" class="form-control" placeholder="published At" value="{{ $book->updated_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Total Copies</label>
        <input type="text" name="total_copies" class="form-control" placeholder="total Copies" value="{{ $book->total_copies }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Available Copies</label>
        <input type="text" name="available_copies" class="form-control" placeholder="Available Copies" value="{{ $book->available_copies }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $book->description }}</textarea>
    </div>
</div>
@endsection
