<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT.Mandiri Langgeng Perkasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;600&display=swap" rel="stylesheet">
    <style>
        .bold-text {
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-blue-100">
    <header>
        <nav class="bg-white border-gray-200 dark:bg-blue-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-4">
                        @guest
                            <a href="view_homepage" class="flex items-center">
                                <img src="{{ asset('image/LogoPTMandiriLanggengPerkasa.png') }}" class="h-8 mr-3"
                                    alt="Company Logo">
                                <span style="font-family: 'Poppins'"
                                    class="self-center font-semibold whitespace-nowrap dark:text-white sm:text-base md:text-2xl lg:text-2xl">PT.Mandiri
                                    Langgeng Perkasa</span></a>
                            {{-- <span class="text-blue-300 text-xl mr-4"  href="view_page" >Welcom</span> --}}
                        @else
                            <span class="text-blue-300 text-xl mr-4">Welcome, {{ Auth::user()->name }}</span>
                            <a class="text-white hover:text-red-500 transition duration-300 ease-in-out hover:animate-pulse"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </div>

                    @auth
                        @guest
                            <div class="flex items-center space-x-4">
                                @if (Route::has('login'))
                                    <a class="text-white hover:text-green-300 transition duration-300 ease-in-out hover:animate-pulse"
                                        href="{{ route('login') }}">Login</a>
                                @endif

                                @if (Route::has('register'))
                                    <a class="text-white hover:text-green-300 transition duration-300 ease-in-out hover:animate-pulse"
                                        href="{{ route('register') }}">Register</a>
                                @endif
                            </div>
                        @endguest
                    @endauth

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="text-white focus:outline-none">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Menu (desktop) -->
                </div>
                <ul class="hidden md:flex space-x-4">
                    <li class="nav-item">
                        <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                            href="view_products">Products</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                            href="view_store">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                            href="view_sales">Sales</a>
                    </li> --}}

                    {{-- <li class="nav-item">
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                        href="view_brand">Brand</a>
                </li> --}}
                    {{-- <li class="nav-item">
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                        href="view_category">Category</a>
                </li> --}}
                    <li class="nav-item">
                        <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                            href="view_gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                            href="view_aboutus">About Us</a>
                    </li>

                </ul>
            </div>
            <!-- Mobile Menu (hidden by default) -->
            <div id="mobile-menu" class="md:hidden hidden bg-gray-800 p-4">
                <a href="view_products" class="block text-white py-2">Products</a>
                <a href="view_gallery" class="block text-white py-2">Gallery</a>
                <a href="view_aboutus" class="block text-white py-2">About Us</a>
            </div>
        </nav>
        <script>
            // Toggle mobile menu visibility
            document.getElementById('mobile-menu-button').addEventListener('click', function () {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });
        </script>
    </header>
    {{-- <div class="container mx-auto mt-5"> --}}
    @yield('content')
    {{-- </div> --}}
    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="{{ asset('image/LogoPTMandiriLanggengPerkasa.png') }}" class="h-8 mr-3"
                            alt="Company Logo" />
                        <span class="self-center font-semibold whitespace-nowrap dark:text-white sm:text-base md:text-2xl lg:text-2xl">PT.Mandiri
                            Langgeng Perkasa</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Links</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="/view_store" class="hover:underline">Store</a>
                            </li>
                            <li>
                                <a href="/view_sales" class="hover:underline">Sales</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="https://flowbite.com/" class="hover:underline">PT.Mandiri Langgeng Perkasa™</a>. All
                    Rights Reserved.
                </span>
            </div>
        </div>
    </footer>
</body>

</html>
