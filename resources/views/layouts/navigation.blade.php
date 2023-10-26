  <!-- Primary Navigation Menu -->
    <div class="flex flex-row bg-dirtywhite justify-start place-items-center space-x-5 w-full mx-auto md:px-6 lg:px-8 py-3 shadow-md border-b-2 border-darkblue">
        <div class="w-[1000px] flex flex-row">
        <img src="/images/logo.png" alt="" style="width: 80px; height: 80px;" class="ml-[2.5rem]">
        <div class="flex flex-col ml-10 mt-7">
            <p class="font-poppin text-black text-[20px] font-medium">BDRS Realty Management Services Co.</p>
        </div>
        </div>
        <div class="flex flex-row w-full justify-end">
        <a href="{{route('posts.viewproperties')}}" class="px-8 py-2 font-poppin text-[18px] font-medium text-black hover:text-darkblue hover:shadow-md">PROPERTIES</a>
        <a href="{{route('updates.newsupdates')}}" class="px-8 py-2 font-poppin text-[18px] font-medium text-black hover:text-darkblue hover:shadow-md ">NEWS & UPDATES</a>
        <a href="{{route('aboutpage')}}" class="px-8 py-2 font-poppin text-[18px] font-medium text-black hover:text-darkblue hover:shadow-md">ABOUT US</a>
        @auth   
        <a href="{{route('dashboard')}}" class="px-8 py-2 font-poppin text-[18px] font-medium text-black hover:text-darkblue hover:shadow-md">DASHBOARD</a>
        <!-- <a href="" class="px-8 py-2 font-poppin text-[18px] font-medium text-black hover:text-darkblue hover:shadow-md">LOGOUT</a> -->
        <form method="POST" action="{{ route('logout') }}" class="w-max px-8 py-2 font-poppin text-[18px] font-medium text-black hover:text-darkblue hover:shadow-md">
                        @csrf
                        <a href="route('logout')" 
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('LOGOUT') }}
                        </a>
          </form>
        @else
        <a href="{{route('login')}}" class="px-8 py-2 font-poppin text-[18px] font-medium text-black hover:text-darkblue hover:shadow-md">LOGIN</a>
        @endauth
        <a href="{{route('aboutpage')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">ABOUT US</a>
        <a href="{{route('updates.newsupdates')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">UPDATES</a>
    </div>

