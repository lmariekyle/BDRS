<nav x-data="{ open: false }" class="static-center mt-10 ml-[10rem] mr-[10rem] dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex h-20 py-5">
            <div class="flex items-stretch h-[70px]">
                <!-- Navigation Links -->
                <div class=" w-[450px] grid grid-cols-3 gap-4">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex px-2 py-2">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('HOME') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex py-2">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('UPDATES') }}
                    </x-nav-link>
                </div>

                
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex px-2 py-2">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('ABOUT US') }}
                    </x-nav-link>
                </div>
                </div>

                <div class="self-center sm:-my-px sm:ml-10 sm:flex px-14">
                   <img src="images/logo.png" alt="" style="width: 100px;"  >
                </div>

                <div  class="ml-[200px] w-[150px] grid grid-cols-2 gap-4">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex px-16">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('BUY') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex px-20">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('RENT') }}
                    </x-nav-link>
                </div>
                </div>


            </div>




                <!-- Authentication -->
                <!-- <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form> -->
            </div>
        </div>
    </div>
</nav>
