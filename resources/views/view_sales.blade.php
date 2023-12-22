@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8 mb-8">
        <div >
            <h1 class="text-3xl font-bold mb-4 text-center">Sales</h1>

            <form action="/view_sales" method="GET" class="mb-4">
                <div class="flex items-center justify-center space-x-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                    <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search" name="search"
                        placeholder="Search" aria-label="Search">
                </div>
            </form>

            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-4">
                @foreach ($sales as $sale)
                    <div class="bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-xl font-bold mb-2 text-center">
                            <a href="/sales/{{ $sale['id'] }}"
                                class="text-blue-500 hover:underline">{{ $sale['sales_name'] }}</a>
                        </h2>
                        <p class="text-gray-700 text-center">{{ $sale['sales_contact'] }}</p>
                        <div class="flex justify-between mt-2">
                            <a href="{{ route('adminedit_sales', $sale) }}" class="text-white opacity-10 hover:underline">Edit</a>
                            <form action="{{ route('admindelete_sales', $sale) }}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="text-white opacity-10 hover:underline">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                {{ $sales->links('vendor.pagination.tailwind') }}
            </div>
            <div class="flex items-center justify-center mt-8 mb-4"> <!-- Menambah kelas items-center -->
                <button class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="window.history.back()">Back</button>
            </div>
        </div>
    </div>
    <form action="{{ route('admincreate_sales') }}" method="GET" class="mb-8">
        <div class="flex items-center justify-center">
            <button class="bg-blue-100 text-blue-100 px-4 py-2 rounded-md"
                href="{{ route('admincreate_sales') }}">Create</button>
        </div>
    </form>

@endsection
