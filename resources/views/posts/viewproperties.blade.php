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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!--Filter Scripts-->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
                    <img src="images/logo.png" alt="" style="width: 100px; height: 100px;" class="mr-[3rem] -mt-[1rem]">
                    <a href="/" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">HOME</a>
                    <a href="" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">ABOUT US</a>
                    <a href="" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">UPDATES</a>
                </div>
            </div>
        </div>
<form action="{{route('posts.viewproperties')}}" method="GET">
    <div class=" flex flex-col justify-evenly mt-[12rem] ml-[5rem] h-[220px] w-[1500px] bg-white-800 rounded-md shadow-md border-1 px-4">
        <div class="flex items-center justify-between">
                <p class="font-poppin text-[20px] font-medium -mt-10">
                    Select what you are looking for... 
                </p>
	     </div>

	        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-7 gap-4 -mt-[5rem] w-[1100px] h-[30px]">
                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="availability">
                    <option value="">All Type</option>
                    <option value="For Rent">For Rent</option>
                    <option value="For Sale">For Sale</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="furnish">
                    <option value="">Furnish Type</option>
                    <option value="Fully Furnished">Fully Furnished</option>
                    <option value="Partially Furnished">Partially Furnished</option>
                    <option value="Not Furnished">Not Furnished</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="type">
                    <option value="" >Unit Type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Condominium">Condominium</option>
                    <option value="Studio Unit Type">Studio Unit</option>
                    <option value="Loft Unit Type">Loft Unit</option>
                    <option value="Penthouse Unit Type">Penthouse Unit</option>
                    <option value="Town House">Town House</option>
                    <option value="Villa">Villa</option>
                    <option value="Row House">Row House</option>
                    <option value="Duplex House">Duplex House</option>
                    <option value="Single Detached House">Single Detached House</option>
                    <option value="Office">Office</option>
                    <option value="Retail">Retail</option>
                    <option value="Industrial">Industrial</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="price">
                    <option value="">Any Price</option>
                    <option value="1000">1000</option>
                    <option value="2000">2000</option>
                    <option value="3000">3000</option>
                    <option value="4000">4000</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="sizes">
                    <option value="">Floor Area</option>
                    <option value="42">Below 50 Sqm</option>
                    <option value="51">51 Sqm</option>
                    <option value="100">100 Sqm</option>
                    <option value="200">200 Sqm</option>
                    <option value="201">Above 201 Sqm</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="bed">
                    <option value="">Bedrooms</option>
                    <option value="1">Studio Only</option>
                    <option value="1">1 bedroom</option>
                    <option value="2">2 bedrooms</option>
                    <option value="3">3 bedrooms</option>
                    <option value="4">4 bedrooms</option>
                    <option value="5">5 bedrooms</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" name="state">
                    <option value="">Location</option>
                    <option value="Cebu">Cebu</option>
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

	            </div>
            </div>
        <button class="absolute flex flex-col ml-[1260px] -mt-[113px] bg-darkblue text-dirtywhite font-poppin text-[16px] shadow-sm rounded-md px-4 py-2">Apply</button>
    </div>
</form>

    <div class="flex flex-col mt-[3rem] ml-[5rem] mb-10 h-max w-max bg-greywhite shadow-md px-8 py-8 rounded-lg border-t-2 border-l-2 border-white">
        <div class="-mt-[2rem] w-[1600px]">
        <p class="px-3 py-4 ml-14 font-playfair text-[54px]">CONDOMINIUMS</p>
        </div>
        <div class="grid grid-cols-3 gap-8 justify-items-center w-max ml-16 mt-8">
            @foreach($properties as $property)
                @if($property->type == "Condominium")
                <div class="flex flex-col justify-center h-[300px] w-[500px] bg-white rounded-lg shadow-inner border-2">    
                    <p class="absolute -mt-[18rem] self-center font-baby text-[34px] font-bold w-max px-4 py-1 bg-dirtywhite shadow-md">{{$property->name}}</p>
                    <img src="{{$property->coverphoto}}" alt="" class="mt-1 ml-4 rounded-2xl self-start" style="width:230px; height: 260px;">
                    <p class="absolute font-poppin text-black text-[14px] inline-block indent-2 text-left max-h-max w-[225px] ml-[16rem] px-1">{{$property->description}}</p>
                    <div class="absolute px-1 py-1 self-center mt-[14rem] ml-[14rem] rounded-md bg-gold w-[100px] h-max border-1 shadow-md">
                    @if ($user) 
                        <a href="{{route('posts.showproperty', $property->id)}}"  class="font-poppins text-[14px] text-center ml-7 tracking-wide font-semibold">VIEW</a>
                    @else
                        <a href="#" data-bs-toggle="modal" data-bs-target="#LoginModal" class="font-poppins text-[14px] text-center ml-7 tracking-wide font-semibold">VIEW</a>
                    @endif
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="flex flex-col mt-[3rem] ml-[5rem] mb-10 h-max w-max bg-[#e9ecef] shadow-md px-8 py-8 rounded-lg  border-r-2 border-b-2 border-white">
        <div class="-mt-[2rem] w-[1600px]">
        <p class="px-3 py-4 ml-14 font-playfair text-[54px]">APARTMENTS</p>
        </div>
        <div class="grid grid-cols-3 gap-8 justify-items-center w-max ml-16 mt-8">
            @foreach($properties as $property)
                @if($property->type == "Apartment")
                <div class="flex flex-col justify-center h-[300px] w-[500px] bg-white rounded-lg shadow-inner border-2">    
                    <p class="absolute -mt-[18rem] self-center font-baby text-[34px] font-bold w-max px-4 py-1 bg-dirtywhite shadow-md">{{$property->name}}</p>
                    <img src="{{$property->coverphoto}}" alt="" class="mt-1 ml-4 rounded-2xl self-start" style="width:230px; height: 260px;">
                    <p class="absolute font-poppin text-black text-[14px] inline-block indent-2 text-left max-h-max w-[225px] ml-[16rem] px-1">{{$property->description}}</p>
                    <div class="absolute px-1 py-1 self-center mt-[14rem] ml-[14rem] rounded-md bg-gold w-[100px] h-max border-1 shadow-md">
                    @if ($user) 
                        <a href="{{route('posts.showproperty', $property->id)}}"  class="font-poppins text-[14px] text-center ml-7 tracking-wide font-semibold">VIEW</a>
                    @else
                        <a href="#" data-bs-toggle="modal" data-bs-target="#LoginModal" class="font-poppins text-[14px] text-center ml-7 tracking-wide font-semibold">VIEW</a>
                    @endif
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
        
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title font-poppin text-[18px]" id="LoginModal">NOTICE</h5>

                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"></i></button>
            </div>
        <div class="modal-body flex flex-col"> 
    
        <div class="flex flex-col justify-center self-center w-max h-max ml-2 px-4 py-4">
                <p class="font-poppin text-[18px] ml-3">To view the details of this property,</p>
                <p class="font-poppin text-[18px]">we would like to require you to sign up</p>
                <a href="{{route('guest-register')}}" class="mt-3 self-center px-4 py-1 font-poppin text-[16px] border-2 border-black">CREATE ACCOUNT</a>
                <p class="font-poppin text-[18px] mt-4 self-center">Already have an account?</p>
        </div>
   
        <div>
        <p class="font-poppin text-[18px] self-start bg-darkblue text-dirtywhite py-2 w-full px-4 mb-3">LOGIN</p>
        <form method="POST" action="{{ route('loginGuest') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-black" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-black"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-black">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
        </div>
        </div>
        </div>
    </div>
    </div>
    </body>
</html>
