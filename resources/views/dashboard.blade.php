@extends('layouts.ecommerceapp')
@section('home')
    <div class="w-[1507px]">
        <div class="flex h-[248px] mx-4 my-4">
            <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden">
                <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
                    <span x-text="currentIndex"></span>/
                    <span x-text="images.length"></span>
                </div>

                <template x-for="(image, index) in images">
                    <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                    <img :src="image" alt="Image" class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
                    </figure>
                </template>

                <button @click="back()"
                    class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
                    <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>

                <button @click="next()" class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
                    <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </article>
        </div>

        <div class="h-96 bg-white mx-4 my-4">
            <div class=""><h1 class="p-3 font-semibold text-xl opacity-80">Premium Products</h1></div>
            <div class="flex flex-row items-center justify-between mx-4 my-4">
                <div class="p-2 border-solid border-2 "><img src="../img/p-1.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Best of QLED TVs <br>7,000 off on exchange</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-2.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Premium Smart Wearables <br> From 2,799</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-3.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Gamepads <br>From 699</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-4.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Huesland Bedsheets <br> From 599</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-5.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Power Tolls <br> Upto 55% Off</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-6.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Ceiling Lamps <br>Min. 50% Off</p></div>
            </div>
        </div>

        <div class="h-96 bg-white mx-4 my-4">
            <div class=""><h1 class="p-3 font-semibold text-xl opacity-80">Premium Products</h1></div>
            <div class="flex flex-row items-center justify-between mx-4 my-4">
                <div class="p-2 border-solid border-2 "><img src="../img/p-1.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Best of QLED TVs <br>7,000 off on exchange</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-2.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Premium Smart Wearables <br> From 2,799</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-3.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Gamepads <br>From 699</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-4.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Huesland Bedsheets <br> From 599</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-5.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Power Tolls <br> Upto 55% Off</p></div>
                <div class="p-2 border-solid border-2 "><img src="../img/p-6.webp" alt="" class="h-[186px] w-[186px]"><p class="text-center font-semibold p-2">Ceiling Lamps <br>Min. 50% Off</p></div>
            </div>
        </div>
    </div>
@endsection
 