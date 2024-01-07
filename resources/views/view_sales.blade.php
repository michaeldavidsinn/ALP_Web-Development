@extends('layouts.template')

@section('content')
    <div
        style="background-image: url('{{ asset('image/HomePagePhoto.png') }}'); background-size: cover; background-position: center; width: 100%; height: 100%;">
        <div class="container mx-auto">
            <div class="items-center py-8">
                <div class=" mx-auto bg-white p-6 rounded-md shadow-md lg:w-1/4 ">
                    <h1 class="text-3xl font-bold mb-4 text-center">Sales</h1>

                    <form action="/view_sales" method="GET" class="mb-4">
                        <div class="flex items-center justify-center space-x-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                            <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search"
                                name="search" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                </div>

                <div class="container mx-auto mt-8 ">
                    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-4">
                        @foreach ($sales as $sale)
                            <div class="mx-auto bg-white p-6 rounded-md shadow-md">
                                <div class="relative h-0 overflow-hidden rounded-lg" style="padding-bottom: 100%;">
                                    <img src="{{ asset('image/fotosales.png') }}" class="absolute top-0 left-0 w-full h-full object-cover"
                                    alt="Sales Foto">
                                </div>
                                <h2 class="text-xl font-bold mb-2 text-center">
                                    <a href="/sales/{{ $sale['id'] }}"
                                        class="text-blue-500 hover:underline">{{ $sale['sales_name'] }}</a>
                                </h2>
                                <p class="text-gray-700 text-center">{{ $sale['sales_contact'] }}</p>
                                <div class="flex justify-between mt-2">
                                    <a href="{{ route('adminedit_sales', $sale) }}"
                                    class="text-green-100 hover:underline opacity-100">O</a>
                                    <form action="{{ route('admindelete_sales', $sale) }}" method="POST" class="inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="text-red-100 hover:underline opacity-100">O</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-4">
                        {{ $sales->links('vendor.pagination.tailwind') }}
                    </div>
                    <div class="flex items-center justify-center mt-8 mb-4"> <!-- Menambah kelas items-center -->
                        <button
                            class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"
                            onclick="window.history.back()">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('admincreate_sales') }}" method="GET" class="">
            <div class="flex items-center justify-center">
                <button class="bg-white opacity-10 text-blue-100 px-4 py-2 rounded-md"
                    href="{{ route('admincreate_sales') }}">Create</button>
            </div>
        </form>
    </div>
@endsection
