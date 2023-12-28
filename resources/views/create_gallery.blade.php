0
@extends('layouts.template')

@section('content')
    <div class="container mt-5">

        <div class="flex items-center justify-center h-screen mt-[-10%]">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-6">Add Gallery</h2>

                <form action="{{ route('adminstore_gallery') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    {{-- <div class="mb-3">
                        <label for="gallery_url" class="text-sm">Gallery URL</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="gallery_url"
                            name="gallery_url" placeholder="Gallery URL">
                    </div> --}}
                    <div class="mb-3">
                        <label for="gallery_url" class="text-sm">Gallery URL</label>
                        <input type="file" class="w-full p-2 border border-gray-300 rounded-md" id="photo"
                            name="gallery_url" accept="image/jpg, image/png, image/jpeg" placeholder="Gallery URL" required>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
