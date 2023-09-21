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

    <div class=" flex flex-col justify-evenly mt-[12rem] ml-[10rem] h-[220px] w-[1500px] bg-white-800 rounded-md shadow-md border-1 px-4">
        <div class="relative">
            <div class="absolute flex items-center ml-2 h-full">
                <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"></path>
                </svg>
            </div>
            <input type="text" placeholder="Search by listing, location, bedroom number..." class="px-8 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
        </div>

            <div class="flex items-center justify-between -mt-10">
                <p class="font-poppin text-[20px] font-medium">
                    Filters
                </p>

	        </div>

	    <div>
	  <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-7 gap-4 -mt-[2rem] w-[1100px] h-[30px]">
                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">All Type</option>
                    <option value="For Rent">For Rent</option>
                    <option value="For Sale">For Sale</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">Furnish Type</option>
                    <option value="Fully Furnished">Fully Furnished</option>
                    <option value="Partially Furnished">Partially Furnished</option>
                    <option value="Not Furnished">Not Furnished</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
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

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">Any Price</option>
                    <option value="1000">1000</option>
                    <option value="2000">2000</option>
                    <option value="3000">3000</option>
                    <option value="4000">4000</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">Floor Area</option>
                    <option value="range1">Below 50 Sqm</option>
                    <option value="range2">51-100 Sqm</option>
                    <option value="range3">101-200 Sqm</option>
                    <option value="range4">201-300 Sqm</option>
                    <option value="range5">Above 301 Sqm</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                    <option value="">Bedrooms</option>
                    <option value="1">Studio Only</option>
                    <option value="1">1 bedroom</option>
                    <option value="2">2 bedrooms</option>
                    <option value="3">3 bedrooms</option>
                    <option value="4">4 bedrooms</option>
                    <option value="5">5 bedrooms</option>
                    </select>

                    <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-black focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
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
        </div>
        
    </div>

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
                    <div class="absolute px-1 self-start mt-[19rem]  ml-1 rounded-md bg-gold w-[100px] h-max border-1 shadow-md">
                    @if ($user) 
                        <a href="{{route('posts.showproperty', $property->id)}}"  class="font-poppins text-[14px] text-center ml-7 tracking-wide font-semibold">VIEW</a>
                    @else
                        <a href="{{route('modal.authorization-modal')}}"  class="font-poppins text-[14px] text-center ml-7 tracking-wide font-semibold">VIEW</a>
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
                    <div class="absolute px-1 self-start mt-[19rem] ml-1 rounded-md bg-gold w-[100px] h-max border-1 shadow-md">
                        <a href=""  class="font-poppins text-[14px] text-center ml-7 tracking-wide font-semibold">VIEW</a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
        

      
    </body>
</html>
