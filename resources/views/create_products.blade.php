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
                <h2 class="text-2xl font-bold mb-6">Tambah Produk</h2>

                <form action="{{ route('adminstore_products') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="name" class="text-sm">Nama Produk</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="name"
                            name="name" placeholder="Products Name"required>
                    </div>
                    <div class="mb-3">
                        <label for="descriptions" class="text-sm">Deskripsi</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="descriptions"
                            name="descriptions" placeholder="Products Descriptions"required>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="text-sm">Foto Produk</label>
                        <input type="file" class="w-full p-2 border border-gray-300 rounded-md" id="photo"
                            name="photo" accept="image/jpg, image/png, image/jpeg" required>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="text-sm">Kategori Produk</label>
                        <select name="category_id" id="category_id" class="w-full p-2 border border-gray-300 rounded-md">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->categories_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="brand_id" class="text-sm">Brand/Merk Produk</label>
                        <select name="brand_id" id="brand_id" class="w-full p-2 border border-gray-300 rounded-md">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit"
                        class="mt-3 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center mt-2 mb-8"> <!-- Menambah kelas items-center -->
        <button class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="window.history.back()">Kembali</button>
    </div>
@endsection
