<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-4">
                    @guest
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                    href="view_article">PT.Mandiri Langgeng Perkasa</a>
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


            </div>
            <ul class="flex space-x-4">


                <li class="nav-item">
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                        href="view_products">Products</a>
                </li>

                <li class="nav-item">
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                        href="view_store">Store</a>
                </li>
                <li class="nav-item">
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                        href="view_sales">Sales</a>
                </li>

                <li class="nav-item">
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                        href="view_brand">Brand</a>
                </li>
                <li class="nav-item">
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                        href="view_category">Category</a>
                </li>
                <li class="nav-item">
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                        href="view_gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="text-white hover:text-blue-300 transition duration-300 ease-in-out hover:animate-pulse"
                        href="view_page">About Us</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container mx-auto mt-5">
        @yield('content')
    </div>
</body>

</html>
