@extends('layouts.template')

@section('content')
    <div
        style="background-image: url('{{ asset('image/HomePagePhoto.png') }}'); background-size: cover; background-position: center; width: 100%; height: 100%;">
        <div class="container mx-auto ">
            <div class="items-center py-8">
                <div class=" mx-auto bg-white p-6 rounded-md shadow-md lg:w-1/2 ">
                    <h1 class="text-3xl font-bold mb-4 text-center">Brand</h1>
                    <form action="/view_brand" method="GET" class="mb-4">
                        <div class="flex items-center justify-center space-x-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                            <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search"
                                name="search" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                </div>

                    <div class="container mx-auto mt-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($brand as $brands)
                                <div class="bg-white p-6 rounded-md shadow-md mb-4">
                                    <img src="{{ asset('storage/' . $brands->logo) }}" alt=""
                                        class="w-auto h-40 object-contain rounded-lg mx-auto mt-2 mb-8">
                                    <h2 class="text-2xl font-bold mb-2 text-center">
                                        <a href="/brand/{{ $brands['id'] }}"
                                            class="text-blue-500 hover:underline">{!! nl2br($brands['brand_name']) !!}</a>
                                    </h2>
                                    <div class="flex justify-between mt-2">
                                        <a href="{{ route('adminedit_brand', $brands) }}"
                                        class="text-green-100 hover:underline opacity-100">O</a>

                                        <form action="{{ route('admindelete_brand', $brands) }}" method="POST"
                                            class="inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="text-red-100 hover:underline opacity-100">O</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4">
                            {{ $brand->links('vendor.pagination.tailwind') }}
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-8 mb-4"> <!-- Menambah kelas items-center -->
                        <button
                            class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"
                            onclick="window.history.back()">Back</button>
                    </div>

            </div>
            <form action="{{ route('admincreate_brand') }}" method="GET" class="">
                <div class="flex items-center justify-center mt-8 ">
                    <button class="bg-white opacity-10 text-blue-100 px-4 py-2 rounded-md"
                        href="{{ route('admincreate_brand') }}">Create</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection
