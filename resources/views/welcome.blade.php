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
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body class="bg-dirtywhite">
    @include('layouts.navigation')
        
        <div class="flex items-center justify-center container mx-auto w-[1226px] h-[583px] mt-20 rounded-lg border-2 border-darkblue shadow-inner">
            <div class="flex flex-row w-[1220px] h-[573px] px-5 py-5 space-x-8 justify-around items-center">
                <div class="mb-14">
                    <div class="">
                        <p class="font-anton text-[68px] text-black">WE SELL,</p>
                    </div>
                    <div class="-mt-6">
                        <p class="font-anton text-[68px] text-black">WE BUY,</p>
                    </div>
                    <div class="-mt-6">
                        <p class="font-anton text-[68px] text-black">WE RENT,</p>
                    </div>
                    <div class="-mt-4 mb-2">
                        <p class="font-poppins text-[28px] text-black">It’s not only about the business,</p>
                    </div>
                    <div class="-mt-1">
                        <p class="font-poppins text-[28px] text-black">but the</p>
                    </div>
                    <div class="absolute -mt-[2.6rem] ml-[6.5rem] bg-gold px-2">
                        <p class="font-poppins text-[28px] text-darkblue">EXTRA SERVICE</p>
                    </div>
                </div>
                <div class="w-[445px] h-[590px] mb-[90px]">
                    <img src="images/bdrs (1).png" alt="">
                </div>
            </div>

        </div>
    </body>
</html>
