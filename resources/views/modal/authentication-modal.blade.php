<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDRS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">

        <!--Filter Scripts-->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body class="bg-dirtywhie antialised">
        <div class="flex justify-center ml-5 mt-10">
            <!-- <div class="h-[732px] w-full ml-1 mt-8">
                <img src="images/welcomebg.png" style="width: 1799px; height: 798px;">
            </div>
            <div class="absolute mt-7 -ml-7 bg-greywhite border-2 border-darkblue shadow-inner bg-opacity-80 w-[1800px] h-[802px]">
                <div class="absolute mt-14 px-2 shadow-md">
                    <img src="images/bdrswelcomebg.png" style="width: 1800px; height: 728px;">
                </div>
            </div> -->
            <div class="absolute mt-[4rem] left-[7rem]">
                <div class="flex justify-evenly space-x-5 max-w-7xl mx-auto md:px-6 lg:px-8">
                    <img src="images/logo.png" alt="" style="width: 100px; height: 100px;" class="mr-[3rem] -mt-[1rem]">
                    <a href="/" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">HOME</a>
                    <a href="" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">ABOUT US</a>
                    <a href="" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">UPDATES</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col mt-[15rem] ml-[45rem] mb-10 h-max w-max bg-[#e9ecef] shadow-md px-8 py-8 rounded-lg order-r-2 border-t-2 border-b-2 border-darkblue">
            <div class="flex flex-col justify-center mt-3 w-max h-max px-4 py-4">
                <p class="font-poppin text-[18px] ml-3">To view the details of this property,</p>
                <p class="font-poppin text-[18px]">we would like to require you to sign up</p>
                <a href="{{route('guest-register')}}" class="mt-4 self-center px-4 py-1 font-poppin text-[16px] border-2 border-black">CREATE ACCOUNT</a>
            </div>
        <div>
            <p class="font-poppin text-[18px] mb-4 ml-[4.5rem] mt-5">Already have an Account?</p>
            <a href="{{route('login')}}" class="ml-[8.5rem] px-4 py-1 font-poppin text-[16px] border-2 border-black">LOGIN</a>
        </div>
    </div>

      
    </body>
</html>
