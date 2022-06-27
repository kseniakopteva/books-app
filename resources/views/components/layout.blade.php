<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Books!!</title>

    <link rel="icon" type="image/x-icon" href="/images/f.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}?ver={{ time() }}">

    <!-- JS -->
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</head>

<body class="font-serif bg-gray-100 min-h-screen relative pb-32">
    <nav class="px-2 sm:px-4 py-2.5 bg-white shadow-md fixed top-0 w-full z-10">
        <div class="flex flex-wrap justify-between items-center max-w-7xl m-auto">

            <a href="/" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap italic text-red-400">Books!!</span>
            </a>

            <div class="block ">
                <ul class="flex mt-4 md:space-x-4 md:mt-0 md:text-sm md:font-medium items-center">

                    @if (auth()->check() && auth()->user()->username === 'ksenia')
                        <li><a href="/admin/books/create" class="hover:text-red-400">Add book</a></li>
                        <li><a href="/admin/authors/create" class="hover:text-red-400">Add author</a></li>
                    @endif

                    @auth
                    <li class="flex">
                        <a href="/profile"
                            class="flex items-center space-x-4 py-2 pl-3 hover:text-red-400 md:p-0">
                            <span>{{auth()->user()->username }}</span>
                            <img src="/images/pfp/{{ auth()->user()->image }}?v={{ time() }}"
                                alt="User's profile picture" class="object-contain w-7 h-7 rounded-full"
                                onerror="this.onerror=null;this.src='/images/pfp/user.jpg';">
                        </a>
                    </li>
                    @endauth

                    @guest
                    <li><a href="/register" class="block py-2 pr-4 pl-3 hover:text-red-400 md:p-0 ">Register</a></li>
                    <li><a href="/login" class="block py-2 pr-4 pl-3 hover:text-red-400 md:p-0 ">Log in</a></li>
                    @endguest



                </ul>
            </div>
        </div>
    </nav>
    <div class="max-w-7xl m-auto mt-20">

        {{ $slot }}

    </div>


    <footer class="bg-gray-300 p-4 pb-12 pt-9 absolute bottom-0 w-full h-32">
        <div class="flex justify-between max-w-7xl m-auto">
            <p>©2022 Ksenia Kopteva</p>
            <p><a href="https://github.com/kseniakopteva/books-app"
                    class="underline text-gray-500">https://github.com/kseniakopteva/books-app</a></p>
        </div>
    </footer>


    @if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
        class="fixed top-2 mx-auto italic bg-green-300 py-3 px-4 z-50" style="left: 50%;
        transform: translateX(-50%); ">
        {!! session('success') !!}</div>
    @endif
</body>

</html>
