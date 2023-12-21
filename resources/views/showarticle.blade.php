@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8 mb-8">
        <div class="bg-white p-6 rounded-md shadow-md">
            {{-- <div class="flex items-center justify-between mb-4"> --}}
                <div class="flex flex-col items-center mb-4">

            {{-- </div>
            <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md"> --}}
                <img src="{{ asset('storage/'.$article->image)}}" alt=""  class="w-3/4 h-auto object-cover rounded-lg mx-auto mt-8 mb-8">
                <h1 class="text-3xl font-bold mt-8 mb-8">{!! nl2br($article['title']) !!}</h1>
                <h3 class="text-xl mb-2 pl-8 pr-8">{!! nl2br ($article['content']) !!}</h3>
            </div>
        </div>
    </div>
@endsection
