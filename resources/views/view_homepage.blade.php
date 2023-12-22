@extends('layouts.template')

@section('content')
    <div class="max-w-full z-0">
        <img src="{{ asset('image/HomePagePhoto.png') }}" class="w-full h-auto max-w-full" alt="Company Logo" />
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-full md:w-3/4 lg:w-1/2 xl:w-1/3">
            <h1 class="text-white text-2xl md:text-4xl lg:text-5xl font-bold mx-auto">
                Selamat Datang
            </h1>
        </div>
    </div>
    <div class="container mx-auto mt-8 mb-8">
        {{-- <div class="bg-white p-6 rounded-md shadow-md"> --}}
        <div>
            <h1 class="text-3xl font-bold mb-4 text-center">Home Page</h1>
            {{-- <form action="/view_article" method="GET" class="mb-4">
            <div class="flex items-center space-x-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search" name="search" placeholder="Search" aria-label="Search">
            </div>
        </form> --}}
            <div class="container mx-auto mt-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($dataBrand as $dataBrands)
                        <div class="bg-white p-6 rounded-md shadow-md mb-4">
                            <a href="/view_brand">
                                <img src="{{ asset('storage/' . $dataBrands->logo) }}" alt=""
                                    class="w-auto h-40 object-contain rounded-lg mx-auto mt-2 mb-8">
                            </a>
                            {{-- <h2 class="text-xl font-bold mb-2">
                            <a class="text-blue-500 hover:underline">{!! nl2br($dataBrands['brand_name']) !!}</a>
                        </h2> --}}
                            {{-- <div class="mt-2"> --}}
                            {{-- <a href="{{route('adminedit_brand', $dataBrands)}}" class="text-blue-500 hover:underline">Edit</a> --}}

                            {{-- <form action="{{route('admindelete_brand', $dataBrands)}}" method="POST" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form> --}}
                            {{-- </div> --}}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container mx-auto mt-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($dataCategory as $dataCategorys)
                        <div class="bg-white p-6 rounded-md shadow-md mb-4">
                            <h2 class="text-xl font-bold mb-2 text-center">
                                <a href="/view_category" class="text-blue-500 hover:underline ">{!! nl2br($dataCategorys['categories_name']) !!}</a>
                            </h2>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container mx-auto mt-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($dataArticle as $dataArticles)
                        <div class="bg-white p-6 rounded-md shadow-md mb-4">
                            <img src="{{ asset('storage/' . $dataArticles->image) }}" alt=""
                                class="w-auto h-auto object-cover rounded-lg mx-auto mt-2 mb-8">
                            <h2 class="text-xl font-bold mb-2 text-center">
                                <a href="/view_article" class="text-blue-500 hover:underline ">{!! nl2br($dataArticles['title']) !!}</a>
                            </h2>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
