@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded-md shadow-md">
            <h1 class="text-3xl font-bold mb-4 text-center">Gallery</h1>

            <form action="{{ route('admincreate_gallery')}}" method="GET" class="mb-4">
                <div class="flex items-center justify-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md" href="{{ route('admincreate_gallery')}}">Create</button>
                </div>
            </form>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="py-2 px-4"></th>
                            <th class="py-2 px-4">Gallery URL</th>
                            <th class="py-2 px-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gallery as $galleryItem)
                            <tr>
                                <td class="py-2 px-4">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4">
                                    <a href="/gallery/{{ $galleryItem->id }}" class="text-blue-500 hover:underline">
                                        {{ $galleryItem->gallery_url }}
                                    </a>
                                </td>
                                <td class="py-2 px-4">
                                    <form action="{{ route('admindelete_gallery', $galleryItem) }}" method="POST" class="inline">
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
        </div>
    </div>
@endsection
