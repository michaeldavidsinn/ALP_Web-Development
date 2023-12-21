@extends('layouts.template')

@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white p-6 rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-4 text-center">Products</h1>




        <form action="/view_products" method="GET" class="mb-4">
            <div class="flex items-center space-x-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search" name="search" placeholder="Search" aria-label="Search">
            </div>
        </form>

        <div class="container mx-auto mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($productss as $product)
                    <div class="bg-white p-6 rounded-md shadow-md mb-4">
                        <img src="{{ asset('storage/'.$product->photo)}}" alt=""  class="w-auto h-auto object-cover rounded-lg mx-auto mt-2 mb-8">
                        <h2 class="text-xl font-bold mb-2">
                            <a href="/products/{{ $product['id'] }}" class="text-blue-500 hover:underline">{!! nl2br($product['name']) !!}</a>
                        </h2>
                        <div class="mt-2">
                            <a href="{{route('adminedit_products', $product)}}" class="text-blue-500 hover:underline">Edit</a>

                            <form action="{{route('admindelete_products', $product)}}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                {{ $productss->links('vendor.pagination.tailwind') }}
            </div>
        </div>

        {{-- <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4">Photo</th>
                        <th class="py-2 px-4">Kategori</th>
                        <th class="py-2 px-4">Brand</th>
                        <th class="py-2 px-4">Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($productss as $product)
                        <tr>

                            <td class="py-2 px-4"><a href="/products/{{ $product['id'] }}" class="text-blue-500 hover:underline">{{ $product['name'] }}</a></td>
                            <td class="py-2 px-4"><img src="{{ asset('storage/'.$product->photo)}}" alt=""></td>
                            <td class="py-2 px-4">{{ $product->category->categories_name }}</td>
                            <td class="py-2 px-4">{{ $product->brand->brand_name }}</td>
                            <td class="py-2 px-4">
                                <a href="{{route('adminedit_products', $product)}}" class="text-blue-500 hover:underline">Edit</a>

                                <form action="{{route('admindelete_products', $product)}}" method="POST" class="inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $productss->links('vendor.pagination.tailwind') }}
        </div> --}}
        <form action="{{ route('admincreate_products')}}" method="GET" class="mb-4">
            <div class="flex items-center justify-center"> <!-- Menambah kelas items-center -->
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md" href="{{ route('admincreate_products')}}">Create</button>
            </div>
        </form>

    </div>
</div>
@endsection
