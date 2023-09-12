<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDRS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body class="bg-greywhite antialised">
        <div class="flex justify-center ml-5 mt-10">
            <div class="h-[732px] w-full ml-1 mt-8">
                <img src="images/welcomebg.png" style="width: 1799px; height: 798px;">
            </div>
            <div class="absolute mt-7 -ml-7 bg-greywhite border-2 border-darkblue shadow-inner bg-opacity-80 w-[1800px] h-[802px]">
                <div class="absolute mt-14 px-2 shadow-md">
                    <img src="images/bdrswelcomebg.png" style="width: 1800px; height: 728px;">
                </div>
            </div>
            <div class="absolute mt-[4rem] right-[10rem]">
                    @include('layouts.navigation')
            </div>
           
            <div class="absolute flex flex-col justify-center px-2 py-2 h-[400px] w-[1000px] mt-[7rem] ml-[35rem] ">
                <p class="ml-[8rem] -mt-6 font-playfair text-[60px] font-dirtywhite">We are the key</p>
                <div class="flex flex-row px-2 -mt-5 ml-[10rem]">
                <p class="font-playfair text-[60px] font-dirtywhite">to your new</p>
                <p class="font-baby text-[78px] font-dirtywhite ml-2">Home</p>
                </div>
                <div class="self-center -ml-[13rem] -mt-5 border-2 border-darkblue hover:bg-dirtywhite shadow-md w-max h-max px-3 py-2">
                    <a href="" class="font-playfair text-[18px] font-semibold hover:text-darkblue">explore now.</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-start  ml-5 mt-[10rem] h-[732px] w-[1800px]">
                <div class="flex flex-row justify-evenly self-center mt-5 w-max h-[100px]">
                    <p class="font-playfair text-[68px] ml-2">We Sell,</p>
                    <p class="font-playfair text-[68px] ml-2">We Buy,</p>
                    <p class="font-playfair text-[68px] ml-2">We Rent,</p>
                </div>
                <div class="flex flex-col ml-4">
                    <p class="font-poppins text-[28px] self-center">Helping you find the property that suits your lifestyle and needs.</p>
                </div>

                <div class="flex flex-row justify-evenly self-start mt-5 ml-[10rem] w-max h-max">
                @foreach($property as $p)
                    <div class="flex flex-col justify-start w-max h-max px-4 py-4 shadow-md mt-14 ml-[10rem] bg-white">
                        
                        <p class="font-playfair text-[28px]">Name:</p>
                        <p class="font-poppins text-[38px] -mt-3">{{$p->name}}</p>
                        <p class="font-playfair text-[28px]">Type:</p>
                        <p class="font-poppins text-[38px] -mt-3">{{$p->type}}</p>
                        <p class="font-playfair text-[28px]">Address:</p>
                        <p class="font-poppins text-[38px] -mt-3">{{$p->address}} {{$p->state}} {{$p->zip}}</p>
                        
                    </div>
                    <div class="">
                    </div>
                @endforeach
                </div>
                
        </div>
    </body>
</html>
