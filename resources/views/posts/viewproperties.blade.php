<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDRS</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
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
    </head>
<body class="bg-dirtywhite antialised">
@include('layouts.navigation')
<form action="{{route('posts.viewproperties')}}" method="GET">
    <div class="flex flex-col justify-evenly mt-[2rem] lg:ml-[5rem] h-[240px] w-[270px] lg:w-[1200px] bg-white-800 rounded-md px-4">
        <div class="flex items-center justify-between">
                <p class="font-poppin text-[12px] lg:text-[20px] font-medium -mt-[1rem] lg:-mt-10">
                    Select what you are looking for... 
                </p>
	     </div>

	        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-7 gap-4 -mt-[5rem] w-[250px] lg:w-[1100px] h-[30px]">

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="name">
                    <option value="">Project Name</option>
                    @foreach($projects as $p)
                    <option value="{{$p->name}}">{{$p->name}}</option>
                    @endforeach
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="unitType">
                    <option value="">Unit Type</option>
                    @foreach($unitTypes as $u)
                    <option value="{{$u->name}}">{{$u->name}}</option>
                    @endforeach
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="availability">
                    <option value="">All Type</option>
                    <option value="For Rent">For Rent</option>
                    <option value="For Sale">For Sale</option>
                    <option value="Pre-Selling">Pre-Selling</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="furnish">
                    <option value="">Furnish Type</option>
                    <option value="Fully Furnished">Fully Furnished</option>
                    <option value="Partially Furnished">Partially Furnished</option>
                    <option value="Not Furnished">Not Furnished</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="type">
                    <option value="" >Type</option>
                    <option value="Condominium">Condominium</option>
                    <option value="Apartment">Apartment</option>
                    <option value="House and Lot">House and Lot</option>
                    </select>

                    <!-- <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="price">
                    <option value="">Price Range</option>
                    <option value="1,000,000">1,000,000</option>
                    <option value="3,000,000">3,000,000</option>
                    <option value="4,000,000">4,000,000</option>
                    <option value="6,000,000">6,000,000</option>
                    <option value="9,000,000">9,000,000</option>
                    <option value="10,000,000">10,000,000</option>
                    <option value="12,000,000">12,000,000</option>
                    </select> -->

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="state">
                    <option value="">Location</option>
                    <option value="Cebu">Cebu</option>
                    <option value="Lapu-Lapu">Lapu-Lapu</option>
                    <option value="Ilo-Ilo">Ilo-Ilo</option>
                    <option value="Bacolod">Bacolod</option>
                    <option value="Dumaguete">Dumaguete</option>
                    <option value="Bohol">Bohol</option>
                    <option value="General Santos">General Santos</option>
                    <option value="Cagayan de Oro">Cagayan de Oro</option>
                    <option value="Manila">Manila</option>
                    <option value="Negros">Negros</option>
                    <option value="Siquijor">Siquijor</option>
                    <option value="Davao">Davao</option>
                    </select>

                    <button class="flex flex-col bg-darkblue text-center text-dirtywhite font-poppin text-[16px] shadow-sm rounded-md px-4 py-2 col-span-2 lg:col-span-1"><p class="mt-2 ml-[6rem] lg:ml-5">Apply</p></button>
	            </div>
            </div>
    </div>
</form>

@foreach($projects as $p)
<div class="flex flex-col mt-[15rem] lg:mt-[3rem] ml-[3rem] mb-10 h-max w-max lg:w-[1200px] bg-greywhite shadow-md px-8 py-8 rounded-lg border-t-2 border-l-2 border-white">
        <div class="-mt-[2rem] w-max lg:w-[1200px]">
        <p class="px-3 py-4 lg:ml-14 font-playfair text-[20px] lg:text-[34px] font-semibold">{{$p->name}}</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 justify-items-center w-max lg:ml-16 lg:mt-8">
            @foreach($properties as $property)
                @if($property->name == "$p->name")
                <div class="flex flex-col w-max justify-center lg:h-[300px] lg:w-[450px] bg-white rounded-lg shadow-inner border-2">    
                    <p class="lg:absolute pn:mt-2 lg:-mt-[16rem] self-center font-playfair lg:text-[22px] font-bold w-max px-4 py-1 bg-dirtywhite shadow-md mb-4">{{$property->unitType}}</p>
                    <img src="{{$property->coverphoto}}" class="mt-1 lg:ml-4 rounded-2xl self-center lg:self-start" style="width:180px; height: 180px;">
                        <p class="lg:absolute ml-3 font-poppin text-black text-[11px] inline-block indent-2 text-left h-max w-[228px] lg:ml-[13rem] px-1 mt-3">{{$property->description}}</p>
                        <div class="lg:absolute px-1 py-1 self-center lg:mt-[18rem] lg:ml-[12rem] rounded-md bg-gold w-[100px] h-max border-1 shadow-md">
                        @if ($user) 
                            <a href="{{route('posts.showproperty', $property->id)}}" style="text-decoration:none;" class="text-black font-poppins text-[14px] text-center ml-7 tracking-wide font-semibold">VIEW</a>
                        @else
                            <a href="#" data-bs-toggle="modal" data-bs-target="#LoginModal" class="font-poppins text-[14px] text-center ml-7 tracking-wide font-semibold">VIEW</a>
                        @endif
                        </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@endforeach
    

        
    @include('modal.authentication-modal')
    </body>
</html>
