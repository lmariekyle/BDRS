  <!-- Primary Navigation Menu -->
    <div class="flex justify-evenly space-x-5 max-w-7xl mx-auto md:px-6 lg:px-8">
        <img src="images/logo.png" alt="" style="width: 100px; height: 100px;" class="mr-[12rem]">
        @auth
        @hasanyrole('Admin|Customer Service|Marketing')
        <a href="{{route('dashboard')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">DASHBOARD</a>
        @endhasanyrole
        @role('User')
        <a href="{{route('posts.viewproperties')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">PROPERTIES</a>
        @endrole
        @else
        <a href="{{route('login')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">LOGIN</a>
        @endauth
        <a href="{{route('aboutpage')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">ABOUT US</a>
        <a href="{{route('updates.newsupdates')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">UPDATES</a>
    </div>

