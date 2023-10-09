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
           
            <div class="absolute flex flex-col justify-center px-2 py-2 h-[400px] w-[1000px] mt-[9rem] ml-[32rem] ">
                <p class="ml-[8rem] -mt-6 font-playfair text-[60px] font-dirtywhite">We are the key</p>
                <div class="flex flex-row px-2 -mt-5 ml-[10rem]">
                <p class="font-playfair text-[60px] font-dirtywhite">to your new</p>
                <p class="font-baby text-[78px] font-dirtywhite ml-2">Home</p>
                </div>
                <div class="self-center -ml-[13rem] -mt-5 border-2 border-darkblue hover:bg-dirtywhite shadow-md w-max h-max px-3 py-2">
                    <a href="{{route('posts.viewproperties')}}" class="font-playfair text-[18px] font-semibold hover:text-darkblue">explore now.</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-start  ml-5 mt-[8rem] h-[732px] w-[1800px]">
                <div class="flex flex-row justify-evenly self-center mt-5 w-max h-[100px]">
                    <p class="font-playfair text-[68px] ml-2 sm:text-start md:text-center ">We Sell,</p>
                    <p class="font-playfair text-[68px] ml-2 ">We Buy,</p>
                    <p class="font-playfair text-[68px] ml-2 ">We Rent</p>
                </div>
                <div class="flex flex-col ml-4">
                    <p class="font-poppins text-[28px] self-center">Helping you find the property that suits your lifestyle and needs.<br></p>
                </div>
                <div class="flex flex-row justify-evenly self-start mt-5 ml-[10rem] w-max h-max">
                    
                    <div class="flex flex-col justify-center w-[430px] h-[530px] px-[2rem] py-4 mt-14 ml-[5rem] border-t-2 border-l-2 border-b-2 border-darkblue">
                        <p class="font-playfair self-center mb-8 -mt-8 text-[58px] underline underline-offset-8">FEATURED</p>
                        @if( ! empty($property))
                        <p class="font-poppins text-[18px] underline underline-offset-4">NAME</p>
                        <p class="font-poppins text-[38px]">{{$property->name}}</p>
                        <p class="font-poppins text-[18px] underline underline-offset-4 mt-2">TYPE</p>
                        <p class="font-poppins text-[38px]">{{$property->type}}</p>
                        <p class="font-poppins text-[18px] underline underline-offset-4 mt-2 ">ADDRESS</p>
                        <p class="font-poppins text-[38px]">{{$property->address}} {{$property->state}} {{$property->zip}}</p>
                        <p class="font-poppins text-[16px] mt-8 ml-2 self-center">Interested?</p>
                        @if ($user) 
                        <a href="{{route('posts.showproperty', $property->id)}}" class="font-poppins text-[14px] underline underline-offset-4 self-center">Click Here</a>
                        @else
                        <a href="{{ route('login') }}" class="font-poppins text-[14px] underline underline-offset-4 self-center">Login to View Properties</a>
                        @endif
                    </div>
                    <!-- gallery -->
                    <div x-data="imageSlider" class="relative ml-[5rem] mx-auto max-w-[1400px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-10">
                        <div class="absolute right-5 top-5 z-10 rounded-full bg-gray-600 px-2 text-center text-sm text-white">
                            <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
                        </div>

                        <button @click="previous()" class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                            <i class="fa-solid fa-caret-left text-2xl font-bold text-black"></i>
                        </button>

                        <button @click="forward()" class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                            <i class="fa-solid fa-caret-right text-2xl font-bold text-black"></i>
                        </button>
                
                        <div class="relative h-[530px]" style="width: 800px">
                            <template x-for="(image, index) in images">
                                <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0">
                                <img :src="image" alt="image" class="rounded-sm" />
                                </div>
                            </template>
                        </div>
                        @endif
                </div>

        <!--Empowering chuchu-->


                <div class = "flex flex-col absolute mt-[45rem] justify-start left-[10rem] ">                                               
                        <img src="images/bldg1.jpg" alt="" class="w-[50rem] h-[55rem]">                                 
                </div>
                <div class = "flex flex-col absolute mt-[55rem] left-[68rem] gap-5">
                    <p class = "flex justify-center text-center font-rozha font-bold text-7xl tracking-widest">Empowering <br>
                        Your Choice<br></p>
                  
                    <p class = "flex justify-center text-center font-playfair font-bold text-4xl tracking-widest" >
                        Buy or Rent,<br>
                        We've got you<br>
                        covered<br></p>
                        <br>
                        <p class = "flex justify-center text-center font-poppin font-bold text-xl tracking-widest">SEE PROPERTIES</p>

                         <!--button for buy and rent-->
                
                <br><br>
                <div class = "gap-10 flex sm:justify-start md:justify-center items-center"> 
                    
                    <button class = "border-solid border-darkblue border-4 bg-amber-200 hover:bg-amber-100  text-black  py-4 px-6 rounded " >  
                        <h1 class = "font-poppin uppercase text-2xl sm:text-base md:text-lg lg:text-xl xl:text-2xl tracking-wider ">FOR SALE  </h1>  

                            <button class = "border-solid border-darkblue border-4 bg-amber-200 hover:bg-amber-100 text-black py-4 px-6 rounded ">  
                                <h1 class = "font-poppin uppercase text-2xl sm:text-base md:text-lg lg:text-xl xl:text-2xl tracking-wider">FOR RENT  </h1>
                           
                    </div>  
                </div>
           
                <div class = "flex flex-col absolute mt-[105rem] justify-center left-[10rem] ">   
                     <p class = "self-center text-center font-rozha text-7xl">News &</p>  
                     <p class = "self-center text-center font-rozha text-7xl -mt-1">Events </p>
                     
                </div>
                

                <!--Heading-->
                <div class = "flex flex-col absolute mt-[120rem] justify-start ml-[7rem]"> 
                    <!-- start of update -->
                    @foreach($update as $upt)
                    <div class="flex flex-col w-[93rem] h-[22rem] border-2 border-gold bg-dirtywhire px-8 py-5 shadow-md mt-[5rem]">
                        <div class="flex flex-col justify-center">
                        <p class="font-playfair font-semibold text-[20px] text-black bg-gold h-max w-max px-4 py-2 shadow-lg">{{$upt->titleHeading}}</p>
                        </div>
                        <div class="flex flex-row justify-start space-x-10 mt-4">
                            <img src="{{$upt->coverphoto}}" alt="" style="height: 240px; width:390px" class="rounded-md border-4 border-gold">
                            <div class="flex flex-col justify-center h-max w-[60rem] px-4 py-4 -mt-[1rem]">
                                  <p class="font-playfair font-semibold text-[22px] h-max w-max px-4 py-2 text-black self-center">{{$upt->titleSub}}</p>
                                <p class="font-poppin text-[16px] text-black text-center">{{$upt->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- end of update -->
                </div>
               
    @if( ! empty($property))
            <script>
                var imageData = @json($imagePaths);
                console.log(imageData);
            </script>

            <script>
                 document.addEventListener("alpine:init", () => {
                Alpine.data("imageSlider", () => ({
                currentIndex: 1,
                images: imageData,
                previous() {
                 if (this.currentIndex > 1) {
                 this.currentIndex = this.currentIndex - 1;
                 }
                 },
                  forward() {
                  if (this.currentIndex < this.images.length) {
                  this.currentIndex = this.currentIndex + 1;
                  }
                },
                }));
            });
        </script>
     @endif
    </body>
</html>
