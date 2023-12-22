@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8 mb-8">
        <div class="bg-white p-6 rounded-md shadow-md">
            <h1 class="text-3xl font-bold mb-8 text-center">Gallery</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-2">
                @foreach ($gallery as $galleryItem)
                    <div >
                        {{-- <div class="h-auto object-cover rounded-lg mx-auto mt-2 mb-8"> --}}
                        <div class="relative h-0 overflow-hidden rounded-lg" style="padding-bottom: 100%;">
                            <a href="/gallery/{{ $galleryItem->id }}" class="hover:underline">
                            <img src="{{ asset('storage/' . $galleryItem->gallery_url) }}" alt="Edit Product" class="cursor-pointer absolute top-0 left-0 w-full h-full object-cover">
                            </a>
                        </div>
                        <div class="mt-2">
                            <form action="{{ route('admindelete_gallery', $galleryItem) }}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="text-white opacity-10 hover:underline">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <form action="{{ route('admincreate_gallery') }}" method="GET" class="mb-8">
        <div class="flex items-center justify-center">
            <button class="bg-blue-100 text-blue-100 px-4 py-2 rounded-md"
                href="{{ route('admincreate_gallery') }}">Create</button>
        </div>
    </form>
@endsection
