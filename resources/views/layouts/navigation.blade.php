
<div class="px-4 py-4 bg-dirtywhite md:flex md:items-center md:justify-between shadow-md border-b-2 border-darkblue">
    <div class="flex justify-between items-center space-y-4">
      <span class="font-poppin text-black text-[12px] lg:text-[16px] font-medium cursor-pointer">
        <a href="/" style="text-decoration:none;" class="text-black">
        <img class="h-20 inline"
          src="/images/logo.png">
           BDRS Realty Management Services Co.
        </a>
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <!-- <ion-icon name="menu" onclick="Menu(this)"></ion-icon> -->
        <i class="fa-solid fa-bars px-2 text-darkblue text-[18px]" name="menu"  onclick="Menu(this)"></i>
      </span>
    </div>

    <ul class="md:flex md:items-center md:z-auto md:static absolute bg-dirtywhite w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 pn:opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('posts.viewproperties')}}" style="text-decoration:none;"  class="px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">PROPERTIES</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('updates.newsupdates')}}" style="text-decoration:none;" class="px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">NEWS & UPDATES</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('aboutpage')}}" style="text-decoration:none;" class="px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">ABOUT US</a>
      </li>
      @auth
      <li class="mx-4 my-6 md:my-0">
        <a href="{{route('dashboard')}}" style="text-decoration:none;" class="px-8 py-2 font-poppin text-[14px] font-medium text-black hover:text-darkblue hover:shadow-md">DASHBOARD</a>
      </li>
      <form method="POST" action="{{ route('logout') }}" style="text-decoration:none;" class="w-max px-8 py-2 font-poppin text-[14px] font-medium hover:text-darkblue hover:shadow-md">
                        @csrf
      <button class="bg-darkblue text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        LOGOUT
      </button>
      </form>
      @else
      <a href="{{route('login')}}" style="text-decoration:none;" class="bg-darkblue text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
        LOGIN
      </a>
      @endauth
      <h2 class=""></h2>
    </ul>
  </div>

  <script>
      function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>

