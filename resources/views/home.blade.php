@extends('layouts.template')

@section('content')
<div class="container mx-auto mt-8">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gray-200 text-lg font-semibold p-4">{{ __('Dashboard') }}</div>

                <div class="p-4">
                    @if (session('status'))
                        <div class="bg-green-500 text-white p-4 mb-4 rounded-md">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-gray-700">{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
