<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="sm:px-6 lg:-ml-9">
        <div class="bg-gold w-[315px] h-[1024px] flex justify-start flex-col py-5 px-2">
            <div class="self-center mr-5 mt-5 bg-dirtywhite rounded-full w-[140px] h-[134px] sm:-my-px sm:ml-10 sm:flex px-14">
                   <!-- <img src="images/logo.png" alt=""  style="width: 100px; height:100px;"> -->
            </div>
            <div class="absolute ml-[112px] mt-4">
                <img src="images/logo.png" alt=""  style="width: 100px; height:100px;">
            </div>
            
        </div>
        <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Create Account</a> -->
        <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
    </div>
</x-app-layout>
