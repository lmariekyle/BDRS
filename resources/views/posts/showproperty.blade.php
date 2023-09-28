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
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body class="bg-gradient-to-br from-[#fdfbfb] to-[#ebedee] antialised px-5">
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
                    <img src="/images/logo.png" alt="" style="width: 100px; height: 100px;" class="mr-[3rem] -mt-[1rem]">
                    <a href="/" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">HOME</a>
                    <a href="" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">ABOUT US</a>
                    <a href="" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">UPDATES</a>
                </div>
            </div>
        </div>

    <div class="flex flex-col h-max w-max mt-[13rem] ml-[5rem] bg-[#f6f6f6] shadow-md px-8 py-8 rounded-lg border-t-2 border-l-2 border-white">
        <div class="-mt-[2rem] w-[1600px] flex flex-col justify-start items-start px-4 py-8">
                           <!-- gallery -->
                    <div class="relative ml-[23rem] mx-auto max-w-full overflow-hidden border-4 w-max border-white rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-10">
                        <div class="relative h-[530px] w-[800px]">                       
                                <img src="/{{$property->coverphoto}}" alt="image" class="rounded-sm shadow-inner" style="height:530px; width:800px;" />

                        </div>
                  
                    </div>
                        <p class="px-3 py-4 font-baby font-semibold text-[74px] -mt-[4rem] self-center">{{$property->name}}</p>
                        <div class="w-[500px] h-max self-center -mt-5">
                            <p class="font-poppin text-[18px]">{{$property->description}}</p>
                        </div>
                        <div class="w-[500px] h-max self-center mt-5">
                            <p class="font-poppin text-[18px] font-semibold">Located At : {{$property->address}} {{$property->state}} , {{$property->zip}}</p>
                        </div>
        
         
        </div>

        <div class="flex flex-row justify-start w-full h-[500px] mt-10">
            <div class="border-l-2 border-t-2 w-max h-max px-2 py-4 border-black">
            <img src="/{{$imagePaths[1]}}" alt="" style="height: 500px; width: 800px;">
            </div>
                <div class="flex flex-col justify-center self-center w-[500px] h-[500px">
                    <p class="px-8 py-2 font-playfair text-[38px] w-max font-semibold text-black">Property Type and Measurement</p>
                    <p class="px-8 py-2 font-poppin text-[22px] font-medium text-black">Type: {{$property->type}}</p>
                    <p class="px-8 py-2 font-poppin text-[22px] font-medium text-black">Bedroom: {{$property->bed}} Bedroom/s</p>
                    <p class="px-8 py-2 font-poppin text-[22px] font-medium text-black">Measurement: {{$property->sizes}}</p>
                </div>
        </div>

        <div class="flex flex-row justify-end w-full h-[500px] mt-10 mb-10">
                <div class="flex flex-col justify-center w-[500px] h-[500px">
                    <p class="px-8 py-2 font-playfair text-[38px] w-max font-semibold text-black">Amenities</p>
                    <p class="px-8 py-2 font-poppin text-[22px] font-medium text-black">Type: {{$property->type}}</p>
                    <p class="px-8 py-2 font-poppin text-[22px] font-medium text-black">Measurement: {{$property->sizes}}</p>
                </div>
                <div class="border-r-2 border-b-2 w-max h-max px-2 py-4 border-black">
                <img src="/{{$imagePaths[2]}}" alt="" style="height: 500px; width: 800px;">
                </div>
        </div>

        
            <div class="flex flex-row justify-center w-full h-[500px] mt-[7rem] mb-10">
                <div class="absolute border-2 self-start w-max h-max px-2 py-4 border-black mr-[55rem] mt-10 bg-darkblue
                shadow-md">
                        <p class="px-8 py-2 font-playfair text-[38px] w-max font-semibold text-dirtywhite">Like what you see?</p>
                        <p class="px-8 py-2 font-playfair text-[38px] w-max font-semibold text-dirtywhite">Send us an inquiry</p>
                    </div>
                    <form method="POST" action="{{ route('posts.showproperty', $property->id) }}">
                        @method('PUT')    
                        @csrf
                        <div class="flex flex-col w-max h-max bg-[#f6f6f6] border-2 border-black -mt-10 pl-[12rem] pr-[5rem] py-8">
                            <p class="px-8 py-2 font-poppin text-[22px] font-medium text-black -ml-8">FULL NAME:</p>
                            <input type="text" name="clientName" id="clientName" class="-mt-2 w-[450px]" value="{{$user->firstName}} {{$user->middleName}} {{$user->lastName}}" required>

                            <p class="px-8 py-2 font-poppin text-[22px] font-medium text-black -ml-8" >CONTACT NUMBER:</p>
                            <input type="text" name="clientContact" id="clientContact" class="-mt-2" value="{{$user->contactNumber}}" required>

                            <p class="px-8 py-2 font-poppin text-[22px] font-medium text-black -ml-8">EMAIL ADDRESS:</p>
                            <input type="text" name="clientEmail" id="clientEmail" class="-mt-2" value="{{$user->email}}" required>
                
                            <p class="px-8 py-2 font-poppin text-[22px] font-medium text-black -ml-8">INQUIRY MESSAGE:</p>
                            <input type="text" name="clientMessage" id="clientMessage" class="-mt-2 h-[100px]" required>
                            <input type="text" name="propertyName" id="propertyName" class="hidden -mt-2 h-[100px]" value="{{$property->name}}">

                            <button type="submit" class="px-8 py-2 font-poppin text-[22px] font-medium text-black border-2 border-black">Send Inquiry</button>
                    </div>
            </div>
        </form>
    </div>

    </body>
</html>
