@extends('layout.main')

@section('container')
    <h1 class="font-bold text-[24px] mb-10">Homepage</h1>
    <ul class="flex gap-6 flex-wrap">
        @foreach ($books as $book)
            <article class="w-[175px] bg-gray-100 rounded-2xl p-6 transition-all hover:bg-green-200 scale-105">
                <div class="w-full h-[100px] bg-white rounded-xl mb-2">
                </div>
                <a href="/books/{{ $book['id'] }}" class="mb-2">
                    <h3 class="text-md font-semibold uppercase">
                        {{ $book->title }}
                    </h3>
                </a>
                <h5 class="text-sm mb-2 pb-4 border-b-[1px] border-gray-400">By {{ $book->author }}</h5>
                <p class="text-sm text-gray-500">
                    {{ $book->genre }} | {{ $book->yearPublished }} |
                    {{ $book->checkedOut === 0 ? 'Not Available' : 'Available' }}
                </p>
            </article>
        @endforeach
    </ul>
@endsection
