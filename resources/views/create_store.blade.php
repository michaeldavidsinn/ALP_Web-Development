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
                <h2 class="text-2xl font-bold mb-6">Tambah Toko Cabang</h2>

                <form action="{{ route('adminstore_store') }}" method="POST">

                    @csrf
                    <div class="mb-3">
                        <label for="title" class="text-sm">Nama Toko Cabang Baru</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="store_name"
                            name="store_name" placeholder="Store Name"required>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="text-sm">Lokasi</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-md" id="location"
                            name="location" placeholder="Store Location"required>
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
