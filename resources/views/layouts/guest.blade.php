<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ecommerce') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#F1F2F4]">
    <header class="bg-white" >
        <nav class="flex justify-between items-center w-[98%] h-[66px] mx-auto">
            <div class="basis-1/10">
                <img class="cursor-pointe rounded-full" src="../img/logo.svg" alt="...">
            </div>
            <div class=" basis-1/2">
                <input type="text" placeholder="Search for Products, Brands and more" class="rounded-xl w-full h-[40px] bg-[#F0F5FF]">
            </div>
            <div class="basis-1/4 flex flex-row justify-between items-center mx-5">
            <a href="{{ route('login')}}">
                <div class="flex flex-row gap-3">
                
                    <div class="h-7 w-7 opacity-65"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z"/></svg></div>
                    <div> Login</div>
                </div>
                </a>
                <div>Become a Seller</div>
            </div>
        </nav>
    </header>
    <div class="w-[1507px]">
        <div class="h-[125px]  bg-white mx-4 my-4">
            <div class="flex justify-between items-center p-2 mx-24">
                <div class="font-semibold text-l text-center"><img src="../img/img-1.webp" alt="" srcset="">Top Offers</div>
                <div class="font-semibold text-l text-center"><img src="../img/img-2.webp" alt="" srcset="">Mobiles & Tablets</div>
                <div class="font-semibold text-l text-center"><img src="../img/img-3.webp" alt="" srcset="">TVs & Appliances</div>
                <div class="font-semibold text-l text-center"><img src="../img/img-4.webp" alt="" srcset="">Electronics</div>
                <div class="font-semibold text-l text-center"><img src="../img/img-5.webp" alt="" srcset="">Fashion</div>
                <div class="font-semibold text-l text-center"><img src="../img/img-6.webp" alt="" srcset="">Beauty</div>
                <div class="font-semibold text-l text-center"><img src="../img/img-7.webp" alt="" srcset="">Home & Kitchen</div>
                <div class="font-semibold text-l text-center"><img src="../img/img-8.webp" alt="" srcset="">Furniture</div>
                <div class="font-semibold text-l text-center"><img src="../img/img-9.webp" alt="" srcset="">Travel</div>
                <div class="font-semibold text-l text-center"><img src="../img/img-10.webp" alt="" srcset="">Grocery</div>
            </div>
        </div>
    </div>
    <body class="bg-[#F1F2F4]">
        @yield('login')
        @yield('register')
        <div class="bg-[#172337] h-28 w-full mt-8">Footer</div>
    </body>
</html>
