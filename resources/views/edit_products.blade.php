@extends('layouts.template')

@section('content')
    <div class="container mt-5">

        <div class="flex items-center justify-center h-screen mt-[-10%]">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-6">Update Article</h2>

                <form action="{{ route('update_products', $productsEdit) }}" method="POST">

                    @method('put')
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="text-sm">Name</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="name"
                            name="name" placeholder="Products Name" value="{{ $productsEdit->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="descriptions" class="text-sm">Descriptions</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="descriptions"
                            name="descriptions" placeholder="Products Descriptions" value="{{ $productsEdit->descriptions}}">
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="text-sm">Photo</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="photo"
                            name="photo" placeholder="Products Photo" value="{{ $productsEdit->descriptions}}" required >
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="text-sm">Category</label>
                        <select name="category_id" id="category_id" class="w-full p-2 border border-gray-300 rounded-md">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->categories_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="brand_id" class="text-sm">Brand</label>
                        <select name="brand_id" id="brand_id" class="w-full p-2 border border-gray-300 rounded-md">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Submit</button>
                </form>
            </div>
        </div>
    </div>
        @endsection
