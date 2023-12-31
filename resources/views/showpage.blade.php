@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded-md shadow-md">
            <div class="flex items-center justify-between mb-4">
                <h1 class="text-3xl font-bold">{{ $pagess['page_name'] }}</h1>
              
            </div>

            <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
                <h3 class="text-xl mb-2">{{ $pagess['content'] }}</h3>
                <h3 class="text-xl mb-2">{{ $pagess['main_image'] }}</h3>

            </div>
        </div>
    </div>
@endsection
