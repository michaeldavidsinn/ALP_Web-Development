@extends('layouts.template')

@section('content')
<div class="container mx-auto mt-8">
    <div class="bg-white p-6 rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-4 text-center">Brand</h1>

        <form action="{{ route('admincreate_brand')}}" method="GET" class="mb-4">
            <div class="flex items-center">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md" href="{{ route('admincreate_brand')}}">Create</button>
            </div>
        </form>

        <form action="/view_brand" method="GET" class="mb-4">
            <div class="flex items-center space-x-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
                <input class="form-input mr-2 focus:outline-none border-b-0 rounded-t-md" type="search" name="search" placeholder="Search" aria-label="Search">
            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4">Logo</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($brand as $brands)
                        <tr>

                            <td class="py-2 px-4"><a href="/brand/{{ $brands['id'] }}" class="text-blue-500 hover:underline">{{ $brands['brand_name'] }}</a></td>
                            <td class="py-2 px-4">{{ $brands['logo'] }}</td>
                            <td class="py-2 px-4">
                                <a href="{{route('adminedit_brand', $brands)}}" class="text-blue-500 hover:underline">Edit</a>

                                <form action="{{route('admindelete_brand', $brands)}}" method="POST" class="inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $brand->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</div>
@endsection
