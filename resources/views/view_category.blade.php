@extends('layouts.template')

@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white p-6 rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-4 text-center">Categories</h1>

        <form action="{{ route('create_category')}}" method="GET" class="mb-4">
            <div class="flex items-center justify-center">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md" href="{{ route('create_category')}}">Create</button>
            </div>
        </form>

        <form action="/view_category" method="GET" class="mb-4">
            <div class="flex items-center justify-center space-x-4">
                <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search" name="search" placeholder="Search" aria-label="Search">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
            </div>
        </form>

        <div class="flex flex-col items-center">
            @foreach ($category as $categories)
                <div class="w-full max-w-md bg-white border border-gray-300 rounded-md mb-4">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">
                            <a href="/category/{{ $categories['id'] }}" class="text-blue-500 hover:underline">{{ $categories['categories_name'] }}</a>
                        </h2>
                        <div class="flex justify-between mt-2">
                            <a href="{{route('edit_category', $categories)}}" class="text-blue-500 hover:underline">Edit</a>

                            <form action="{{route('delete_category', $categories)}}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $category->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</div>
@endsection
