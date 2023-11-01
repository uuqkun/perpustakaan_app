@extends('layout.main')

@section('container')
    <h1 class="font-bold text-[24px] mb-10">List of Books</h1>
    <ul class="flex gap-6 flex-wrap w-full justify-evenly">
        @foreach ($books as $book)
            <article class="w-[20%] bg-gray-100 rounded-2xl p-6 transition-all hover:scale-105 hover:bg-gray-300">
                <div class="w-full bg-white rounded-xl overflow-hidden mb-20">
                    <img src={{ $book->image }} alt={{ $book->title }} class="bg-cover w-full h-full">
                </div>
                <a href="/books/{{ $book['id'] }}" class="mb-2">
                    <h3 class="text-md font-semibold uppercase">
                        {{ $book->title }}
                    </h3>
                </a>
                <h5 class="text-sm mb-2 pb-4 border-b-[1px] border-gray-400">By {{ $book->author }}</h5>
                <p class="text-sm text-gray-500 mb-2">
                    {{ $book->authors }}
                </p>

                <p class="{{ $book->checkedOut === 1 ? 'bg-red-400' : 'bg-green-400' }} w-fit p-2 rounded-md text-xs text-gray-700">
                    {{ $book->checkedOut === 1 ? 'Not Available' : 'Available' }}
                </p>
            </article>
        @endforeach
    </ul>
@endsection
