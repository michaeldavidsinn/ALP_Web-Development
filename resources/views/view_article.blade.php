@extends('layouts.template')

@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white p-6 rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-4 text-center">Article</h1>

        <form action="{{ route('create_article') }}" method="GET" class="mb-4">
            <div class="flex items-center">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md" href="{{ route('create_article')}}">Create</button>
            </div>
        </form>

        <form action="/view_article" method="GET" class="mb-4">
            <div class="flex items-center space-x-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search" name="search" placeholder="Search" aria-label="Search">
            </div>
        </form>

        <div class="container mx-auto mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($article as $articles)
                    <div class="bg-white p-6 rounded-md shadow-md mb-4">
                        <h2 class="text-xl font-bold mb-2">
                            <a href="/article/{{ $articles['id'] }}" class="text-blue-500 hover:underline">{{ $articles['title'] }}</a>
                        </h2>
                        <p class="text-gray-700">{{ $articles['content'] }}</p>

                        <div class="mt-2">
                            <a href="{{ route('edit_article', $articles) }}" class="text-blue-500 hover:underline">Edit</a>

                            <form action="{{ route('delete_article', $articles) }}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                {{ $article->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </div>
</div>
@endsection
