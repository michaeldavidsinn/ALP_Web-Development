@extends('layouts.template')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded-md shadow-md">
            <div class="flex items-center justify-between mb-4">
                <h1 class="text-3xl font-bold">{{ $mentor['name'] }}</h1>
                <a href="/" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-800">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back
                </a>
            </div>

            <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
                <h3 class="text-xl mb-2">{{ $mentor['majorstudy'] }}</h3>
                <h3 class="text-xl mb-2">{{ $mentor['NIM'] }}</h3>

                <p class="text-lg font-semibold mt-4">Mentees :</p>

                <ul class="list-disc pl-8">
                    @foreach ($mentor->mentees as $mentee)
                        <li class="text-lg">{{ $mentee['name'] }} - {{ $mentee['NIM'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
