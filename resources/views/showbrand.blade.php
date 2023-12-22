@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8 mb-8">
        {{-- <div class="bg-white p-6 rounded-md shadow-md"> --}}
            <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
                <img src="{{ asset('storage/'.$brand->logo)}}" alt=""  class="w-auto h-40 object-contain rounded-lg mx-auto mt-2 mb-8">
                    <h1 class="text-3xl font-bold text-center">{{ $brand['brand_name'] }}</h1>
                <ul class="list-disc pl-8">
                    @foreach ($brand->products as $product)
                        <li class="text-lg">{{ $product['name'] }}</li>
                    @endforeach
                </ul>
            </div>
        {{-- </div> --}}
    </div>
    <div class="flex items-center justify-center mt-2 mb-8"> <!-- Menambah kelas items-center -->
        <button class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="window.history.back()">Back</button>
    </div>
@endsection
