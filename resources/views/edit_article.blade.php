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
        <div class="flex items-center justify-center h-auto ">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h2 class="text-2xl font-bold mb-6">Update Article</h2>
                <form action="{{ route('adminupdate_article', $articleEdit) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="text-sm">Judul</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="title"
                            name="title" placeholder="Article Title" value="{{ $articleEdit->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="text-sm">Konten</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="content"
                            name="content" placeholder="Article Content" value="{{ $articleEdit->content }}">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="image" class="text-sm">Image</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="image"
                            name="image" placeholder="Article Image" value="{{ $articleEdit->image}}" required>
                    </div> --}}
                    <div class="mb-3">
                        <label for="image" class="text-sm">Gambar Thumbnail</label>
                        <br>
                        @if ($articleEdit->image)
                            <img class="img-preview img-fluid mb-3 mt-1 col-sm-5 rounded-lg"
                                src="{{ asset('storage/' . $articleEdit->image) }}" alt="{{ $articleEdit->title }}">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input class="form-control" type="file" class="w-full p-2 border border-gray-300 rounded-md"
                            id="image" name="Image" accept="image/jpg, image/png, image/jpeg"
                            placeholder="Article Image" onchange="previewImage()" >
                    </div>


                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Update</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center mt-2 mb-8"> <!-- Menambah kelas items-center -->
        <button class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="window.history.back()">Kembali</button>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.filesp[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
