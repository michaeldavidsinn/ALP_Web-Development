@extends('layouts.template')

@section('content')
    <div
        style="background-image: url('{{ asset('image/HomePagePhoto.png') }}'); background-size: cover; background-position: center; width: 100%; height: 100%;">
        <div class="container mx-auto py-8">
            <div class="transparent-white p-6 rounded-md shadow-md">
                <div class="flex items-center tran justify-between mb-4">

                </div>

                <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
                    <h1 class="text-3xl font-bold my-4">{{ $category['categories_name'] }}</h1>

                    <ul class="list-disc pl-8">
                        @foreach ($category->products as $product)
                            <li class="text-lg">{{ $product['name'] }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex items-center justify-center mt-8 mb-4"> <!-- Menambah kelas items-center -->
                    <button
                        class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"
                        onclick="window.history.back()">Back</button>
                </div>
            </div>
        </div>
    </div>
@endsection
