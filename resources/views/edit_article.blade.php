@extends('layouts.template')

@section('content')
    <div class="container mt-5">

        <div class="flex items-center justify-center h-screen mt-[-10%]">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-6">Update Article</h2>

                <form action="{{ route('update_article', $articleEdit) }}" method="POST">

                    @method('put')
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="text-sm">Title</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="title"
                            name="title" placeholder="Article Title" value="{{ $articleEdit->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="text-sm">Content</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="content"
                            name="content" placeholder="Article Content" value="{{ $articleEdit->content}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="text-sm">Image</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="image"
                            name="image" placeholder="Article Image" value="{{ $articleEdit->image}}" required>
                    </div>


                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Submit</button>
                </form>
            </div>
        </div>
    </div>
        @endsection