@extends('layout.main')

@section('container')
    <article class="mb-20">
        <h3>
            {{ $book->title }}
        </h3>
        <h5>By {{ $book->author }}</h5>
        <span>
            {{ $book->genre }} || {{ $book->yearPubarticleshed }} ||
            {{ $book->checkedOut === 0 ? 'Not Available' : 'Available' }}
        </span>
    </article>

    <a href="/" class=" px-6 py-4 bg-gray-200 rounded-xl hover:bg-gray-300">Back to Home</a>
@endsection
