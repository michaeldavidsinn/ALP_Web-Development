@extends('layouts.template')

@section('content')
    <div
        style="background-image: url('{{ asset('image/HomePagePhoto.png') }}'); background-size: cover; background-position: center; width: 100%; height: 100%;">
        <div class="container mx-auto ">
            <div class="container mx-auto py-8">
                <div class=" mx-auto  p-6 rounded-md shadow-md lg:w-1/4 ">
                    <h1 class="text-white text-5xl font-bold text-center">Gallery</h1>
                </div>
                <div class="container mx-auto mt-8 ">
                <div class="bg-white p-6 rounded-md shadow-md">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-2">
                        @foreach ($gallery as $galleryItem)
                            <div>
                                <div class="relative h-0 overflow-hidden rounded-lg" style="padding-bottom: 100%;">
                                    <a href="/gallery/{{ $galleryItem->id }}" class="hover:underline">
                                        <img src="{{ asset('storage/' . $galleryItem->gallery_url) }}" alt="Edit Product"
                                            class="cursor-pointer absolute top-0 left-0 w-full h-full object-cover">
                                    </a>
                                </div>
                                <div class="mt-2">
                                    <form action="{{ route('admindelete_gallery', $galleryItem) }}" method="POST"
                                        class="inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="text-red-100 hover:underline opacity-100">O</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
                <form action="{{ route('admincreate_gallery') }}" method="GET" class="">
                    <div class="flex items-center justify-center">
                        <button class="bg-white opacity-10 text-blue-100 px-4 py-2 rounded-md"
                            href="{{ route('admincreate_gallery') }}">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
