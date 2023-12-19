@extends('layouts.template')

@section('content')
    <div class="container mt-5">

        <div class="flex items-center justify-center h-screen mt-[-10%]">
            <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-6">Update Brand</h2>

                <form action="{{ route('adminupdate_brand', $brandEdit) }}" method="POST">

                    @method('put')
                    @csrf

                    <div class="mb-3">
                        <label for="brand_name" class="text-sm">Brand Name</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="brand_name"
                            name="brand_name" placeholder="Brand Name" value="{{ $brandEdit->brand_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="text-sm">Logo</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="logo"
                            name="logo" placeholder="Logo" value="{{ $brandEdit->logo}}">
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Submit</button>
                </form>


            </div>
        </div>
    </div>
@endsection
