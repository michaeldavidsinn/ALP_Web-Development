@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8 mb-8">
        <div class="bg-white pr-6 pl-6 pb-6 pt 2 rounded-md shadow-md">
            <div class="flex flex-col items-center mt-1 mb-4">
                <img src="{{ asset('storage/' . $article->image) }}" alt=""
                    class="w-3/4 h-auto object-cover rounded-lg mx-auto mt-8 mb-8">
                <h1 class="text-3xl font-bold mt-8 mb-8">{!! nl2br($article['title']) !!}</h1>
                <h3 class="text-xl mb-2 pl-40 pr-40">{!! nl2br($article['content']) !!}</h3>
            </div>
            <div class="flex items-center justify-center mt-8 mb-4"> <!-- Menambah kelas items-center -->
                <button
                    class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="window.history.back()">Back</button>
            </div>
        </div>
    </div>
@endsection
