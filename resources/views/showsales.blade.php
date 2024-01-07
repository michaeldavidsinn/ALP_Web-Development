@extends('layouts.template')

@section('content')
    <div
        style="background-image: url('{{ asset('image/HomePagePhoto.png') }}'); background-size: cover; background-position: center; width: 100%; height: 100%;">
        <div class="container mx-auto py-8">
            <div class="transparent-white p-6 rounded-md shadow-md">
                <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
                    <div class="relative h-0 overflow-hidden rounded-lg" style="padding-bottom: 100%;">
                        <img src="{{ asset('image/fotosales.png') }}" class="absolute top-0 left-0 w-full h-full object-cover"
                        alt="Sales Foto">
                    </div>
                    <h1 class="text-3xl font-bold text-center">{{ $sales['sales_name'] }}</h1>
                    <h3 class="text-2xl my-2 text-center"> <img src="{{ asset('image/whatsapp.png') }}" class="inline-block align-middle"  style="height: 1.3em;"
                        alt="Sales Foto"> {{ $sales['sales_contact'] }}</h3>
                </div>
            </div>
            <div class="flex items-center justify-center mt-8 mb-4"> <!-- Menambah kelas items-center -->
                <button
                    class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="window.history.back()">Back</button>
            </div>
        </div>

    </div>
@endsection
