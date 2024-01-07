@extends('layouts.template')

@section('content')
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3988.8812793861516!2d116.87590737496558!3d-1.2417919987463768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMTQnMzAuNSJTIDExNsKwNTInNDIuNSJF!5e0!3m2!1sen!2sid!4v1703170693998!5m2!1sen!2sid"
        class="w-full" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div
        style="background-image: url('{{ asset('image/HomePagePhoto.png') }}'); background-size: cover; background-position: center; width: 100%; height: 100%;">

        <div class="container mx-auto px-8 py-8">
            <div class="bg-white p-6 rounded-md shadow-md my-6">
                <div class="flex items-center justify-between mx-auto w-full sm:px-8 py-9 md:px-20 py-9 lg:px-40 py-9">
                    @foreach ($dataPage as $dataPages)
                        <div class="h-full w-1/2">
                            <div class="flex items-center justify-between mx-auto w-full">
                                <div class="w-full ml-auto  px-4">
                                    <h3 class="p-2 font-bold text-2xl "> Alamat </h3>
                                    <h2 class="px-2 ">{{ $dataPages['alamat'] }}</h2>
                                    <h3 class="p-2 font-bold text-2xl "> Nomor Telepon </h3>
                                    <h2 class="px-2 ">{{ $dataPages['nomor_telepon'] }}</h2>
                                    <h3 class="p-2 font-bold text-2xl "> Email Kami </h3>
                                    <h2 class="px-2 ">{{ $dataPages['email'] }}</h2>
                                    <h3 class="p-2 font-bold text-2xl "> Jam Operasional </h3>
                                    <h2 class="px-2 ">{{ $dataPages['jam_operasional'] }}</h2>
                                </div>
                            </div>
                    @endforeach
                </div>
                <div class="w-1/2 p-4">
                    <h3 class="pb-2 font-bold text-2xl ">Send Us Message </h3>
                    <form>
                        <label for="website-admin" class="block mb-2 text-sm font-medium text-neutral-950">Username</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-zinc-300 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                                </svg>
                            </span>
                            <input type="text" id="website-admin"
                                class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-zinc-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Your Name...">
                        </div>
                        <div class=" pt-2 ">
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Phone
                                number</label>
                            <input type="tel" id="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        </div>
                        <label for="email-address-icon" class="pt-2 block mb-2 text-sm font-medium text-gray-900 ">
                            Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </div>
                            <input type="text" id="email-address-icon"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-zinc-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@gmail.com">
                        </div>

                        <label for="message" class=" pt-2 block mb-2 text-sm font-medium text-gray-900 ">Your
                            message</label>
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-300 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a message..."></textarea>
                        <div class="w-full h-8">

                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>

            {{-- <table class="w-full border-collapse border border-blue-500">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="p-2">#</th>
                <th class="p-2">Alamat</th>
                <th class="p-2">Nomor Telepon</th>
                <th class="p-2">Email</th>
                <th class="p-2">Jam Kerja</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($about_us as $aboutUs)
                <tr class="border border-blue-500">
                    <td class="p-2">{{ $aboutUs['alamat'] }}</td>
                    <td class="p-2">{{ $aboutUs['nomor_telepon'] }}</td>
                    <td class="p-2">{{ $aboutUs['email'] }}</td>
                    <td class="p-2">{{ $aboutUs['jam_kerja'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
        </div>
        <h1 class="p-2 font-bold text-white text-5xl text-center my-8  ">Sales Kami</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">
            @foreach ($dataSales as $dataSaless)
                {{-- <div class="bg-white p-4 rounded-md shadow-md">
                <div class="relative h-0 overflow-hidden rounded-lg" style="padding-bottom: 50%;">
                    <img src="{{ asset('image/fotosales.png') }}" class="absolute top-0 left-0 w-1/4 h-1/84object-cover"
                    alt="Sales Foto">
                </div>
                <h2 class="text-xl font-bold mb-2 text-center">{{ $dataSaless['sales_name'] }}</h2>
                <p class="text-gray-700 text-center">{{ $dataSaless['sales_contact'] }}</p>
            </div> --}}
                <div class="bg-white p-20 rounded-md shadow-md text-center">
                    <img src="{{ asset('image/fotosales.png') }}"  class="mx-auto mb-4 rounded-full w-20 h-20 max-w-full" alt="Sales Foto">
                    <h2 class="text-xl font-bold mb-2 text-center">
                        <a href="/view_sales" class="text-blue-500 hover:underline">{{ $dataSaless['sales_name'] }}</a>
                    </h2>
                    <p class="text-gray-700 text-center">{{ $dataSaless['sales_contact'] }}</p>
                </div>
            @endforeach
        </div>
        <div class="flex items-center justify-center my-10"> <!-- Menambah kelas items-center -->
            <a class="bg-blue-100 text-blue-500 px-4 py-2 rounded-md" href="/view_sales">See More</a>
        </div>
        <h1 class="text-white text-5xl font-bold mb-8 mt-8 text-center">Cabang Toko Kami</h1>
        <div class="overflow-x-auto  items-center">
            <table class="mx-auto bg-white border border-gray-300 rounded-md">
                <tbody>
                    @foreach ($dataStore as $dataStores)
                        <tr>
                            <td class="flex items-center justify-center py-2 px-4 font-bold rounded-md">
                                {{ $dataStores['store_name'] }}</td>
                        </tr>
                        <tr>
                            <td class="flex items-center justify-center py-2 px-4 rounded-md">{{ $dataStores['location'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex items-center justify-center my-10"> <!-- Menambah kelas items-center -->
            <a class="bg-blue-100 text-blue-500 px-4 py-2 rounded-md" href="/view_store">See More</a>
        </div>
    </div>
    </div>
    </div>
@endsection
