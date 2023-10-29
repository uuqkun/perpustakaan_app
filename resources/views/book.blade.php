@extends('layout.main')

@section('container')
    <article>
        <h3>
            {{ $book->title }}
        </h3>
        <h5>By {{ $book->author }}</h5>
        <span>
            {{ $book->genre }} || {{ $book->yearPubarticleshed }} ||
            {{ $book->checkedOut === 0 ? 'Not Available' : 'Available' }}
        </span>
    </article>

    <a href="/">Back to Home</a>
@endsection
