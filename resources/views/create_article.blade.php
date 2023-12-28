@extends('layouts.template')

@section('content')
    <div class="container mt-5">

        <div class="flex items-center justify-center h-screen mt-[-10%]">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-6">Add Article</h2>

                <form action="{{ route('adminstore_article') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="title" class="text-sm">Title</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="title"
                            name="title" placeholder="Article Title">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="text-sm">Content</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="content"
                            name="content" placeholder="Article Content">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="image" class="text-sm">Image</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="image"
                            name="image" placeholder="Article Image" required>
                    </div> --}}
                    <div class="mb-3">
                        <label for="image" class="text-sm">Image</label>
                        <input type="file" class="w-full p-2 border border-gray-300 rounded-md" id="image"
                            name="Image" accept="image/jpg, image/png, image/jpeg" placeholder="Article Image" required>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
