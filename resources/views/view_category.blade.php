@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8 mb-8">
        {{-- <div class="bg-white p-6 rounded-md shadow-md"> --}}
            <h1 class="text-3xl font-bold mb-4 text-center">Categories</h1>
            <form action="/view_category" method="GET" class="mb-4">
                <div class="flex items-center justify-center space-x-4">
                    <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search" name="search"
                        placeholder="Search" aria-label="Search">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                </div>
            </form>

            <div class="container mx-auto mt-8">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-4">
                    @foreach ($category as $categories)
                        <div class="bg-white p-6 rounded-md shadow-md mb-4">
                            <h2 class="text-2xl font-bold mb-2 text-center">
                                <a href="/category/{{ $categories['id'] }}"
                                    class="text-blue-500 hover:underline ">{!! nl2br($categories['categories_name']) !!}</a>
                            </h2>
                            <div class="flex justify-between mt-2">
                                <a href="{{ route('adminedit_category', $categories) }}"
                                    class="text-white opacity-10 hover:underline">Edit</a>

                                <form action="{{ route('admindelete_category', $categories) }}" method="POST"
                                    class="inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="text-white opacity-10 hover:underline">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-4">
                {{ $category->links('vendor.pagination.tailwind') }}
            </div>
        {{-- </div> --}}
    </div>
    <div class="flex items-center justify-center mt-8 mb-4"> <!-- Menambah kelas items-center -->
        <button class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="window.history.back()">Back</button>
    </div>
    <form action="{{ route('admincreate_category') }}" method="GET" class="mb-8">
        <div class="flex items-center justify-center">
            <button class="bg-blue-100 text-blue-100 px-4 py-2 rounded-md"
                href="{{ route('admincreate_category') }}">Create</button>
        </div>
    </form>
@endsection
