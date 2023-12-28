@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8 mb-8">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex items-center justify-center h-auto ">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h2 class="text-2xl font-bold mb-6 ">Update Produk</h2>
                <form action="{{ route('adminupdate_products', $productsEdit) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="text-sm">Nama Produk</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="name"
                            name="name" placeholder="Products Name" value="{{ $productsEdit->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="descriptions" class="text-sm">Spesifikasi/Deskripsi</label>
                        <input type="textarea" class="w-full p-2 border border-gray-300 rounded-md" id="descriptions"
                            name="descriptions" placeholder="Products Descriptions"
                            value="{{ $productsEdit->descriptions }}">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="photo" class="text-sm">Photo</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="photo"
                            name="photo" placeholder="Products Photo" value="{{ $productsEdit->descriptions}}" required >
                    </div> --}}
                    <div class="mb-3">
                        <label for="photo" class="text-sm ">Foto Produk</label>
                        <br>
                        @if ($productsEdit->photo)
                            <img class="img-preview img-fluid mb-3 mt-1 col-sm-5 rounded-lg"
                                src="{{ asset('storage/' . $productsEdit->photo) }}" alt="{{ $productsEdit->name }}">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input class="form-control" type="file" class="w-full p-2 border border-gray-300 rounded-md"
                            id="photo" name="photo" accept="image/jpg, image/png, image/jpeg"
                            placeholder="Foto Produk" onchange="previewImage()" >
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="text-sm">Kategori</label>
                        <select name="category_id" id="category_id" class="w-full p-2 border border-gray-300 rounded-md">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->categories_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="brand_id" class="text-sm">Brand/Merk</label>
                        <select name="brand_id" id="brand_id" class="w-full p-2 border border-gray-300 rounded-md">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                            @endforeach
                        </select>
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
            const image = document.querySelector('#photo');
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
