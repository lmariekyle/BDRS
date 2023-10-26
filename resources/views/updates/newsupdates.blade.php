<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDRS Realty Management Services Co.</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&family=Rozha+One&display=swap" rel="stylesheet">

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body class="bg-dirtywhite antialised">
        <!-- navigation -->
        @include('layouts.navigation')

        <!-- start of  content -->
        <div class="flex flex-col justify-center mt-10 ml-10 w-full h-max px-10">

            <div class="flex flex-row -mt-[6rem]">
                <div class="flex flex-col">                
                <p class="font-rozha text-[72px] text-black self-start mt-[10rem]">News &</p>
                <p class="font-rozha text-[72px] text-black self-start -mt-8">Events</p>
                </div>
                <div class="border-t-2 border-t-black w-[1250px] h-10 mt-[17rem] ml-8"></div>
            </div>

          <div class = "flex flex-col absolute mt-[80rem] justify-start ml-[7rem]"> 
                    <!-- start of update -->
                    <!-- @foreach($updates as $upt)
                    <div class="flex flex-col w-[93rem] h-[21rem] border-2 border-black bg-gold px-8 py-4 shadow-md mt-[5rem]">
                        <div class="flex flex-col justify-center">
                        <p class="font-playfair font-semibold text-[20px] text-black bg-dirtywhite h-max w-max px-4 py-2 shadow-lg ">{{$upt->titleHeading}}</p>
                        </div>
                        <div class="flex flex-row justify-start space-x-10 mt-4">
                            <img src="{{$upt->coverphoto}}" alt="" style="height: 230px; width:390px" class="rounded-md border-2 border-white">
                            <div class="flex flex-col justify-center h-[21.5rem] w-[60rem] px-4 py-4 -mt-[4rem]">
                                  <p class="font-playfair font-semibold text-[22px] h-max w-max px-4 py-2 text-black self-center">{{$upt->titleSub}}</p>
                                <p class="font-poppin text-[16px] px-2 py-2 text-black text-center">{{$upt->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach -->
                    @foreach($updates as $upt)
                    <div class="flex flex-col w-max h-[51rem] border-2 border-black bg-gold px-8 py-4 shadow-md mt-[5rem]">
                        <div class="flex flex-col justify-center">
                            <p class="font-playfair font-semibold text-[20px] text-black bg-dirtywhite h-max w-max px-4 py-2 shadow-lg ">{{$upt->date}}</p>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="font-playfair font-semibold text-[22px] h-max w-max px-4 py-2 text-black self-center">{{$upt->titleHeading}}</p>
                            <p class="font-playfair font-semibold text-[18px] h-max w-max px-4 py-2 text-black self-center -mt-2">{{$upt->titleSub}}</p>
                        </div>
                        <div class="flex flex-col">
                            
                        </div>

                    </div>
                    @endforeach
                    <!-- end of update -->
                </div>
         </div> <!-- end div of col! -->
    </body>
</html>
