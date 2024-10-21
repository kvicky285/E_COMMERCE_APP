<header class="bg-white w-[1507px]">
    <nav class="flex items-center justify-between h-[66px] mx-10">
        <div class="">
           <a href="{{route('dashboard')}}"> <img class="cursor-pointe rounded-full" src="../img/logo.svg" alt="..."></a> 
        </div>
        <div class="mx-10">
            <input type="text" placeholder="Search for Products, Brands and more" class="rounded-xl  h-[40px] md:w-[600px] bg-[#F0F5FF]">
        </div>
        <div class="flex flex-row items-center mx-5">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div> @if (Route::has('login'))  @auth {{ Auth::user()->name }} @endauth @else {{Login}} @endif</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                
                </x-slot>
                
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown> 
            <div class="p-1 mx-2">Cart</div>
            <div class="p-1">Become a seller</div>
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