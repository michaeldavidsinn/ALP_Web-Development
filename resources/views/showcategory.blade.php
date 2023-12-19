@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded-md shadow-md">
            <div class="flex items-center justify-between mb-4">
                <h1 class="text-3xl font-bold">{{ $category['categories_name'] }}</h1>

                
            </div>

            <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">

                <ul class="list-disc pl-8">
                    @foreach ($category->products as $product)
                        <li class="text-lg">{{ $product['name'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
