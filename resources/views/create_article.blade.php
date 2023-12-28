@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8 mb-8">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex items-center justify-center h-auto">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h2 class="text-2xl font-bold mb-6">Tambah Artikel</h2>

                <form action="{{ route('adminstore_article') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="title" class="text-sm">Judul Artikel</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="title"
                            name="title" placeholder="Article Title"required>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="text-sm">Konten Artikel</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="content"
                            name="content" placeholder="Article Content"required>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="image" class="text-sm">Image</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="image"
                            name="image" placeholder="Article Image" required>
                    </div> --}}
                    <div class="mb-3">
                        <label for="image" class="text-sm">Thumbnail Artikel</label>
                        <input type="file" class="w-full p-2 border border-gray-300 rounded-md" id="image"
                            name="Image" accept="image/jpg, image/png, image/jpeg" placeholder="Article Image" required>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center mt-2 mb-8"> <!-- Menambah kelas items-center -->
        <button class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="window.history.back()">Kembali</button>
    </div>
@endsection
