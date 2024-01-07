@extends('layouts.template')

@section('content')
    <div
        style="background-image: url('{{ asset('image/HomePagePhoto.png') }}'); background-size: cover; background-position: center; width: 100%; height: 100%;">
        <div class="container mx-auto py-8">
            <div class="transparent-white p-6 rounded-md shadow-md">
                <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
                    <h3 class="text-xl mb-2"><img src="{{ asset('storage/' . $productsss->photo) }}" alt=""></h3>
                    <h1 class="text-3xl font-bold">{{ $productsss['name'] }}</h1>
                    <h3 class="text-xl mb-2">{!! nl2br($productsss['descriptions']) !!}</h3>
                    <h3 class="text-xl mb-2">Category: {{ $productsss->category->categories_name }}</h3>
                    <h3 class="text-xl mb-2">Brand: {{ $productsss->brand->brand_name }}</h3>
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
