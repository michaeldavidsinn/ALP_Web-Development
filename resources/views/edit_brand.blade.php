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
                <h2 class="text-2xl font-bold mb-6">Update Brand</h2>

                <form action="{{ route('adminupdate_brand', $brandEdit) }}" method="POST" enctype="multipart/form-data">

                    @method('put')
                    @csrf

                    <div class="mb-3">
                        <label for="brand_name" class="text-sm">Nama Brand/Merk</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="brand_name"
                            name="brand_name" placeholder="Brand Name" value="{{ $brandEdit->brand_name}}">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="logo" class="text-sm">Logo</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="logo"
                            name="logo" placeholder="Logo" value="{{ $brandEdit->logo}}">
                    </div> --}}
                    <div class="mb-3">
                        <label for="logo" class="text-sm">Logo Brand/Merk</label>
                        <br>
                        @if ($brandEdit->logo)
                            <img class="img-preview img-fluid mb-3 mt-1 col-sm-5 rounded-lg"
                                src="{{ asset('storage/' . $brandEdit->logo) }}" alt="{{  $brandEdit->brand_name }}">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input class="form-control" type="file" class="w-full p-2 border border-gray-300 rounded-md"
                            id="logo" name="logo" accept="image/jpg, image/png, image/jpeg"
                            placeholder="Logo Brand" onchange="previewImage()" >
                    </div>
                    <button type="submit"
                        class=" mt-2 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Update</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center mt-2 mb-8"> <!-- Menambah kelas items-center -->
        <button class="hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse bg-blue-500 text-white px-4 py-2 rounded-md"  onclick="window.history.back()">Kembali</button>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#logo');
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
