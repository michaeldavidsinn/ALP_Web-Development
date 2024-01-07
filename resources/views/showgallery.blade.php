@extends('layouts.template')

@section('content')
<div
style="background-image: url('{{ asset('image/HomePagePhoto.png') }}'); background-size: cover; background-position: center; width: 100%; height: 100%;">

    <div class="container mx-auto py-8">
        <div class="bg-white p-6 rounded-md shadow-md">
            <div class="flex items-center justify-between mb-4">
                <img src="{{ asset('storage/' . $gallery->gallery_url) }}" alt=""class="w-max-auto h-auto object-cover rounded-lg mx-auto mt-8 mb-8">
            </div>
            <div class="flex items-center justify-center mt-2 mb-4"> <!-- Menambah kelas items-center -->
                <button class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="window.history.back()">Back</button>
            </div>
        </div>
    </div>
</div>
@endsection
