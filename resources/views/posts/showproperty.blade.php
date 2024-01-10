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

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body class="bg-dirtywhite antialised">

        @include('layouts.navigation')

    <div class="flex flex-col h-max w-[1400px] mt-[8rem] ml-8 bg-[#f6f6f6] shadow-md px-8 py-8 rounded-lg border-t-2 border-l-2 border-white">
        <div class="-mt-[2rem] w-[600px] lg:w-[1400px] flex flex-col justify-start items-start px-4 py-8">
                           <!-- gallery -->
                <div class="relative ml-[23rem] mx-auto max-w-full overflow-hidden border-4 w-max border-white bg-greywhite rounded-mdp-2 sm:p-4 mb-10 mt-10">
                         <video width="1140px" height="700px" controls>
                            <source src="/{{$property->vid}}" type="video/mp4">
                            Your browser does not support the video tag.
                         </video>
                    </div>
                      
                    <p class="px-3 py-4 font-playfair font-semibold text-[54px] -mt-[1rem] self-center">{{$property->name}}</p>

                    <div class="flex flex-col lg:flex-row">
                    <div class="relative ml-[23rem] mx-auto max-w-full overflow-hidden border-4 w-max border-white rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-10">
                        <div class="relative h-[430px] w-[600px]">                       
                                <img src="/{{$property->coverphoto}}" alt="image" class="rounded-sm shadow-inner" style="height:430px; width:600px;" class="object-cover w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-auto" />
                        </div>
                    </div>
                        
                        <div class="ml-8 lg:w-[600px] h-max self-center mt-3">
                            <p class="font-poppin text-[18px]">{{$property->description}}</p>
                        </div>
                    </div>
        
         
        </div>

        <div class="flex flex-col lg:flex-row justify-start w-full h-[500px] mt-10">
            <div class="border-l-2 border-t-2 w-max h-max px-6 py-5 border-black">
                <img src="/{{$imagePaths[0]}}" alt="" style="height:430px; width:600px;">
            </div>
                <div class="flex flex-col justify-center lg:self-center w-[500px] h-[500px]">
                    <p class="px-8 py-2 font-playfair text-[28px] lg:text-[38px] w-max font-semibold text-black">Property Highlights</p>
                    <p class="px-8 py-2 font-poppin text-[14px] lg:text-[18px] font-semibold w-max text-black -mt-4">{{$property->type}} | {{$property->sizes}} | {{$property->bed}} Bedroom/s</p>
                    <div class="">
                
                    <p class="px-8 py-2 font-poppin text-[14px] lg:text-[16px] font-medium text-black w-[700px] mt-2">{{$property->unitdesc}}</p>
                    </div>

                    <div class="mt-4">
                    <p class="px-8 py-2 font-poppin text-[14px] lg:text-[16px] font-medium text-black w-[700px] -mt-4">{{$property->beddesc}}</p>
                    </div>
                
                    <div class="flex flex-row self-end mt-3 border-b-2 border-gray-500">
                    <p class="px-8 py-2 font-poppin text-[12px] w-max self-start text-gray-500">{{$property->type}} | {{$property->sizes}} Sqm. | {{$property->bed}} Bedroom/s</p>
                    </div>
                </div>
        </div>

        <div class="flex flex-col lg:flex-row justify-end w-full h-[500px] mt-[53rem] lg:mt-[7rem] mb-10">
                <div class="flex flex-col justify-center w-[500px] h-[500px mr-[13rem]">
                    <p class="px-8 py-2 font-poppin text-[14px] lg:text-[18px] w-max font-semibold text-black self-center ml-[8rem]">{{$property->furnish}} | {{$property->price}} | {{$property->address}}, {{$property->state}}</p>
                    <p class="px-8 py-2 font-poppin text-[14px] lg:text-[16px] font-medium text-black w-[700px] -ml-4">{{$property->furnishdesc}}</p>
                    <p class="px-8 py-2 font-poppin text-[14px] lg:text-[16px] font-medium text-black w-[700px] -ml-4">{{$property->pricedesc}}</p>
                    <p class="px-8 py-2 font-poppin text-[14px] lg:text-[16px] font-medium text-black w-[700px] -ml-4">{{$property->locationdesc}}</p>
                </div>
                <div class="border-r-2 border-b-2 w-max h-max px-6 py-5 border-black">
                <img src="/{{$imagePaths[1]}}" alt="" style="height: 500px; width: 800px;" >
                </div>
        </div>

        <div class="flex flex-col justify-center self-center w-max h-max mt-[3rem]">
            <div class="relative ml-[23rem] mx-auto max-w-full overflow-hidden border-4 w-max border-white rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-10">
                    <div class="relative h-[530px] w-[700px]">                       
                        <img src="/{{$property->priceimg}}" alt="image" class="rounded-sm shadow-inner" style="height:530px; width:700px;" />
                    </div>
            </div>
              
        </div>

        
            <div class="flex flex-row justify-center w-full h-[500px] mt-[5rem] mb-10">
                <div class="absolute border-2 self-start w-max h-max px-2 py-4 border-black mr-[55rem] mt-10 bg-darkblue
                shadow-md">
                        <p class="px-8 py-2 font-playfair text-[38px] w-max font-semibold text-dirtywhite">Like what you see?</p>
                        <p class="px-8 py-2 font-playfair text-[28px] w-max font-semibold text-dirtywhite">Use this form for your inquiries</p>
                        <p class="px-8 py-2 font-playfair text-[28px] w-max font-semibold text-dirtywhite">or schedule a viewing with us</p>
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
                            <textarea id="clientMessage" class="-mt-2 h-[100px] resize rounded-md" type="text" name="clientMessage" required></textarea>
                            <input type="text" name="propertyName" id="propertyName" class="hidden -mt-2 h-[100px]" value="{{$property->name}}">

                            <button type="submit" class="px-8 py-2 font-poppin mt-4 text-[22px] font-medium text-black border-2 border-black">Send Inquiry</button>
                    </div>
            </div>
        </form>
    </div>

    </body>
</html>
