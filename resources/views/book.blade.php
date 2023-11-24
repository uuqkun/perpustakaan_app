@extends('layout.main')

@section('container')
    <article class="mb-8 flex flex-col gap-4">
        <div class="w-[200px] bg-white rounded-xl overflow-hidden mb-20">
            <img src={{ $book->image_url }} alt={{ $book->title }} class="bg-cover w-full h-full">
        </div>
        <p class="{{ $book->checkedOut === 1 ? 'bg-red-400' : 'bg-green-400' }} w-fit p-2 rounded-md text-xs text-gray-700">
            {{ $book->checkedOut === 1 ? 'Not Available' : 'Available' }}
        </p>
        <h3 class="text-md font-semibold uppercase">
            {{ $book->title }}
        </h3>
        <h4 class="text-sm font-light capitalize">
            {{ $book->subtitle }}
        </h4>
        <h4 class="text-md font-semibold">
            Author(s)
        </h4>
        <p class="text-sm text-gray-500 mb-2">
            {{ $book->authors }}
        </p>
        <span class=""> 
            <a href={{ $book->url }} class="text-sm mr-4 px-6 py-4 bg-blue-300 rounded-xl hover:bg-blue-400 hover:scale-105 transition-all">Visit Official site ></a>
            <a href="/" class="px-6 py-4 bg-gray-200 rounded-xl hover:bg-gray-300 hover:scale-105 transition-all">Back to Home</a>
        </span>
    </article>

@endsection
