  <!-- Primary Navigation Menu -->
    <!-- <div class="flex flex-row bg-dirtywhite justify-start place-items-center w-full space-x-5 lg:w-full px-2 lg:px-8 shadow-md border-b-2 border-darkblue">
        <div class="lg:w-[1000px] flex flex-row bg-blue-500">
                <a href="/"><img src="/images/logo.png" alt="" style="width: 80px; height: 80px;" class="ml-[2.5rem]"></a>
                <div class="flex flex-col ml-10 mt-7">
                <p class="font-poppin text-black text-[16px] font-medium">BDRS Realty Management Services Co.</p>
                </div>
        </div>`
        <div class="flex flex-row w-full justify-end">
        <a href="{{route('posts.viewproperties')}}" class="px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">PROPERTIES</a>
        <a href="{{route('updates.newsupdates')}}" class="px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md ">NEWS & UPDATES</a>
        <a href="{{route('aboutpage')}}" class="px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">ABOUT US</a>
        @auth   
        <a href="{{route('dashboard')}}" class="px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">DASHBOARD</a>
        <form method="POST" action="{{ route('logout') }}" class="w-max px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">
                        @csrf
                        <a href="route('logout')" 
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('LOGOUT') }}
                        </a>
          </form>
        @else
        <a href="{{route('login')}}" class="px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">LOGIN</a>
        @endauth
        </div>
    </div> -->
    <nav class="p-5 bg-dirtywhite  md:flex md:items-center md:justify-between shadow-md border-b-2 border-darkblue">
    <div class="flex justify-between items-center ">
      <span class="font-poppin text-black text-[12px] lg:text-[16px] font-medium cursor-pointer">
        <img class="h-20 inline"
          src="/images/logo.png">
           BDRS Realty Management Services Co.
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <!-- <ion-icon name="menu" onclick="Menu(this)"></ion-icon> -->
        <i class="fa-solid fa-bars px-2 text-darkblue text-[18px]" name="menu"  onclick="Menu(this)"></i>
      </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-dirtywhite w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('posts.viewproperties')}}" class="text-[14px] hover:text-darkblue duration-500">PROPERTIES</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('updates.newsupdates')}}" class="text-[14px] hover:text-darkblue duration-500">NEWS & UPDATES</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('aboutpage')}}" class="text-[14px] hover:text-darkblue duration-500">ABOUT US</a>
      </li>
      @auth
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('dashboard')}}" class="text-[14px] hover:text-darkblue duration-500">DASHBOARD</a>
      </li>
      <form method="POST" action="{{ route('logout') }}" class="w-max px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">
                        @csrf
      <button class="bg-darkblue text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        LOGOUT
      </button>
      </form>
      @else
      <a href="{{route('login')}}" class="bg-darkblue text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        LOGOUT
      </a>
      @endauth
      <h2 class=""></h2>
    </ul>
  </nav>

