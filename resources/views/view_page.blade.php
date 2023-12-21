@extends('layouts.template')

@section('content')
<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3988.8812793861516!2d116.87590737496558!3d-1.2417919987463768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMTQnMzAuNSJTIDExNsKwNTInNDIuNSJF!5e0!3m2!1sen!2sid!4v1703170693998!5m2!1sen!2sid" class="w-full" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded-md shadow-md">
            <h1 class="text-3xl font-bold mb-4 text-center">Page Table</h1>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="py-2 px-4"></th>
                            <th class="py-2 px-4">Page Name</th>
                            <th class="py-2 px-4">Page Image</th>
                            <th class="py-2 px-4">Content</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pages as $page)

                            <tr>
                                <td class="py-2 px-4"><a href="/page/{{ $page->id }}"
                                        class="text-blue-500 hover:underline">{{ $page->page_name }}</a></td>
                                <td class="py-2 px-4">{{ $page->main_image }}</td>
                                <td class="py-2 px-4">{{ $page->content }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
