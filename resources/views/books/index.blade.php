@extends('layouts.app')

@section('title', 'Home Book')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Publication_year</th>
            <th>Total_Copies</th>
            <th>Available_Copies</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($book->count() > 0)
        @foreach($book as $bk)
        <tr>
            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $bk->title }}</td>
            <td class="align-middle">{{ $bk->author }}</td>
            <td class="align-middle">{{ $bk->genre }}</td>
            <td class="align-middle">{{ (strlen($bk->description) > 20 ? substr($bk->description, 0, 20) . '....' : $bk->description) }}</td>
            <td class="align-middle">{{ $bk->publication_year }}</td>
            <td class="align-middle">{{ $bk->total_copies }}</td>
            <td class="align-middle">{{ $bk->available_copies }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('books.show', $bk->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('books.edit', $bk->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('books.destroy', $bk->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
            <td class="text-center" colspan="5">Product not found</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection
