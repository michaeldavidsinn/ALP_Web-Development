@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8 mb-8">
        <div class="bg-white p-6 rounded-md shadow-md my-6">
            <h1 class="text-3xl font-bold mb-4 text-center">List Cabang Toko Kami</h1>

            <form action="/view_store" method="GET" class="mb-4">
                <div class="flex items-center justify-center space-x-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                    <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search" name="search"
                        placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
            <div class="bg-white p-6 rounded-md shadow-md">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="py-2 px-4">Name</th>
                            <th class="py-2 px-4">Location</th>
                            <th class="py-2 px-4"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($storess as $store)
                            <tr>
                                <td class="py-4 px-4"><a href="/store/{{ $store['id'] }}"
                                        class="text-blue-500 hover:underline">{{ $store['store_name'] }}</a></td>
                                <td class="py-2 px-4">{{ $store['location'] }}</td>
                                <td class="py-2 px-4">
                                    <a href="{{ route('adminedit_store', $store) }}"
                                        class="text-blue-500 hover:underline">+</a>

                                    <form action="{{ route('admindelete_store', $store) }}" method="POST" class="inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="text-red-500 hover:underline">-</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $storess->links('vendor.pagination.tailwind') }}
            </div>
            <div class="flex items-center justify-center mt-8 mb-4"> <!-- Menambah kelas items-center -->
                <button class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="window.history.back()">Back</button>
            </div>
        </div>

    </div>

    <form action="{{ route('admincreate_store') }}" method="GET" class="mb-8">
        <div class="flex items-center justify-center">
            <button class="bg-blue-100 text-blue-100 px-4 py-2 rounded-md"
                href="{{ route('admincreate_store') }}">Create</button>
        </div>
    </form>
@endsection
