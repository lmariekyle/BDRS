<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>BDRS Realty Management Services Co.</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&family=Rozha+One&display=swap" rel="stylesheet">

        <style>
             @media print {
 
                html,
                body {

                    /* Hide the whole page */
                    display: none;
                }
                }

                html {
                    user-select: none;
                }
                @media (max-width: 390px) {
                .flex-wrap {
                    flex-wrap: nowrap;
                    overflow-x: auto;
                }
                .w-full {
                    width: 100%;
                }
                .h-64 {
                    height: 20rem;
                }
                .text-xl {
                    font-size: 1.25rem;
                }
                .text-sm {
                    font-size: 0.875rem;
                }
                }
         </style>




        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



    </head>
    <body class="bg-dirtywhite antialised">
        <div class="sticky z-50 top-0">
                    @include('layouts.navigation')
        </div> 
        
        <!-- landing page welcome content -->
        <div class="flex flex-col ml-[1.8rem] justify-center self-center mt-[2rem] border-2 border-darkblue shadow-inner">
            <div class="">
                <img src="images/collageOne.png">
            </div> 
           
            <div class="absolute flex flex-col justify-center px-2 py-2 h-[400px] w-[500px] lg:w-[1000px] mt-[9rem] lg:mt-[28rem] lg:ml-[31rem] pn:ml-[3rem]">
                    <p class="ml-[8rem] -mt-6 font-playfair lg:text-[60px] text-dirtywhite text-[12px]">We are the key</p>
                <div class="flex flex-row px-2 lg:-mt-[3rem] pn:-mt-[1rem] pn:ml-[8.5rem] lg:ml-[10rem] mb-1">
                    <p class="font-playfair mt-2 lg:text-[60px] text-[12px] text-dirtywhite">to your new</p>
                    <p class="font-baby lg:text-[78px] text-[14px] pn:mt-2 pn:ml-1 text-dirtywhite lg:ml-2">Home</p>
                </div>
                <div class="self-center h-max w-max lg:-ml-[13rem] -ml-[5rem] lg:-mt-5 -mt-1 border-2 border-dirtywhite bg-darkblue hover:bg-dirtywhite shadow-md lg:w-max lg:h-max lg:px-3 lg:py-2 pn:w-[80px] pn:h-[25px] text-center">
                    <a href="{{route('posts.viewproperties')}}" class="font-playfair text-center text-dirtywhite lg:text-[18px] text-[10px] font-semibold hover:text-darkblue">explore now.</a>
                </div>
            </div>

        </div>
        <!-- end of landing page welcome content -->
    
        <div class="flex flex-row justify-evenly self-center mt-[2rem] lg:mt-[5rem] ml-[6rem] lg:ml-[20rem] w-max h-[100px]">
                    <p class="font-playfair text-[20px] lg:text-[68px] ml-2 sm:text-start md:text-center ">Sell,</p>
                    <p class="font-playfair text-[20px] lg:text-[68px] lg:ml-8 ml-2"> Buy,</p>
                    <p class="font-playfair text-[20px] lg:text-[68px] lg:ml-8 ml-2"> Rent,</p>
                    <p class="font-playfair text-[20px] lg:text-[68px] lg:ml-8 ml-2"> Brokerage</p>
        </div>
                <div class="flex flex-col justify-items-center -mt-[4rem] lg:mt-[2rem] lg:ml-4 pn:ml-8">
                    <p class="font-poppins lg:text-[28px] lg:w-max pn:w-[350px] text-[12px] self-center">Helping you find the property that suits your lifestyle and needs.<br></p>
                </div>

        <!-- start of update -->
            <div class="flex flex-col absolute mt-[4rem] ml-[4rem] justify-start lg:mt-[12rem] lg:ml-[10rem] mb-4">

                <div class="flex items-center mb-4">
                    <p class="text-[26px] lg:text-[42px] font-rozha mr-4">News & Events</p>
                    <div class="border-b-2 border-black w-full md:w-3/4"></div>
                </div>

                <div class="flex flex-wrap -ml-4">

                    @foreach($updates as $update)
                    <div class="w-[250px] h-[50px] md:w-1/2 lg:w-[250px] lg:h-[100px] p-4">

                        <div class="relative overflow-hidden rounded-lg shadow-md">

                        <img class="w-full h-[100px] lg:h-64 object-cover rounded-t-lg transition duration-500 ease-in-out" src="{{$update->coverphoto}}" alt="Update Image">

                        <div class="p-6 bg-gradient-to-b from-transparent to-black text-white">

                            <h2 class="text-[14px] lg:text-xl font-playfair-display font-bold mb-2">{{$update->titleHeading}}</h2>

                            <p class="text-[12px] lg:text-sm font-semibold mb-4">
                            <?php
                            $paragraph = $update->description;
                            $maxCharacters = 200;
                            echo strlen($paragraph) > $maxCharacters ? substr($paragraph, 0, $maxCharacters) . '...' : $paragraph;
                            ?>
                            </p>

                            <a href="{{route('posts.showupdate', $update->id)}}" class="text-yellow-400 transition duration-300 ease-in-out inline-block mb-4">Read more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
                <!-- end of update -->

        <!-- start of featured content -->
        <div class="flex flex-col justify-start mt-[3rem] lg:mt-[5rem] h-[732px] w-full">

                    <ul class="slider flex flex-col justify-items-center mt-[45rem] lg:mt-[50rem]" id="slider1">
                        <li class="relative">
                            <div class="flex flex-col lg:flex-row justify-evenly self-start lg:mt-[2rem] pn:mt-2 ml-[2rem] w-max h-max">
                                <!-- featured property description -->
                                <div class="lg:flex lg:flex-col grid grid-cols-2 justify-center w-[90vw] h-max lg:w-[430px] lg:h-[530px] px-[2rem] pn:ml-[4px] pn:mb-2 py-4 mt-8 lg:mt-14 lg:ml-[5rem] border-t-2 border-l-2 border-r-2 lg:border-b-2 lg:border-r-0 border-darkblue">
                                    <p class="font-playfair self-center mb-8 mr-8 mt-4 lg:text-[38px] underline underline-offset-8">FEATURED</p>
                                    <div>
                                        <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2">NAME</p>
                                        <p class="font-poppins lg:text-[28px] text-[14px]">Taft East Gate</p>
                                    </div>
                                    <div>
                                        <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2">TYPE</p>
                                        <p class="font-poppins lg:text-[28px] text-[14px]">Condominium Complex</p>
                                    </div>
                                    <div class="ml-2 lg:ml-0">
                                        <p p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2">ADDRESS</p>
                                        <p class="font-poppins lg:text-[28px] text-[12px] w-[150px] lg:w-[300px]">8 Cardinal Rosales Avenue, corner Pope John Paul II Ave, Cebu City, 6000 Cebu</p>
                                    </div>
                                </div><!--end of featured property description -->
                                <!-- image section -->
                                <div class="relative lg:ml-[2rem] lg:mt-[2rem] pn:ml-1 mx-auto max-w-[90vw] lg:max-w-[1000px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-4 mt-6 pn:-mt-[0.90px] pn:w-[90vw] pn:h-[330px] lg:w-[800px] lg:h-[530px]">
                                    <img src="/images/tafteastgate.png" alt="" style="" class="w-auto h-auto">
                                </div>
                                <!-- end of image section -->
                            </div>
                        </li>
                        <li class="relative hidden">
                        <div class="flex lg:flex-row pn:flex-col justify-evenly self-start lg:mt-[5rem] pn:mt-2 ml-[2rem] w-max h-max">
                            <!-- featured property description -->
                            <div class="lg:flex lg:flex-col grid grid-cols-2 justify-center w-[400px] h-max lg:w-[430px] lg:h-[530px] px-[2rem] pn:ml-[4px] pn:mb-2 py-4 mt-14 lg:ml-[5rem] border-t-2 border-l-2 border-r-2 lg:border-b-2 lg:border-r-0 border-darkblue">
                                    <p class="font-playfair self-center mb-8 mr-8 mt-4 lg:text-[38px] underline underline-offset-8">FEATURED</p>
                                    <div>
                                    <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2">NAME</p>
                                    <p class="font-poppins lg:text-[28px] text-[14px]">Vertex Central</p>
                                    </div>
                                    <div>
                                    <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2">TYPE</p>
                                    <p class="font-poppins lg:text-[28px] text-[14px]">Condominium Complex</p>
                                    </div>
                                    <div class="ml-2 lg:ml-0"> 
                                    <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2 ">ADDRESS</p>
                                    <p class="font-poppins lg:text-[28px] text-[12px] w-[150px] lg:w-[300px]">491 Archbishop Reyes Ave, Cebu City, 6000 Cebu</p>
                                    </div>
                             
                                    <!-- <p class="font-poppins lg:text-[16px] text-[12px] mt-8 ml-1 self-center">Interested?</p>                           -->
                            </div><!--end of featured property description -->
                            <!-- image section -->
                            <div class="relative lg:ml-[2rem] lg:mt-[3.5rem] ml-1 mx-auto max-w-[1000px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-[50px] pn:-mt-[0.90px] pn:w-[400px] pn:h-[330px] lg:w-[800px] lg:h-[530px]">
                                    <img src="/images/vertexcentral.jpg" alt="" style="" class="w-auto h-auto">
                            </div>
                            <!-- end of image section -->
                        </div>
                    </li>
                    <li class="relative hidden">
                        <div class="flex lg:flex-row pn:flex-col justify-evenly self-start lg:mt-[5rem] pn:mt-2 ml-[2rem] w-max h-max">
                            <!-- featured property description -->
                            <div class="lg:flex lg:flex-col grid grid-cols-2 justify-center w-[400px] h-max lg:w-[430px] lg:h-[530px] px-[2rem] pn:ml-[4px] pn:mb-2 py-4 mt-14 lg:ml-[5rem] border-t-2 border-l-2 border-r-2 lg:border-b-2 lg:border-r-0 border-darkblue">
                                    <p class="font-playfair self-center mb-8 mr-8 mt-4 lg:text-[38px] underline underline-offset-8">FEATURED</p>
                                    <div>
                                    <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2">NAME</p>
                                    <p class="font-poppins lg:text-[28px] text-[14px]">Vertex Coast</p>
                                    </div>
                                    <div>
                                    <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2">TYPE</p>
                                    <p class="font-poppins lg:text-[28px] text-[14px]">Condominium Complex</p>
                                    </div>
                                    <div class="ml-2 lg:ml-0"> 
                                    <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2 ">ADDRESS</p>
                                    <p class="font-poppins lg:text-[28px] text-[12px] w-[150px] lg:w-[300px]">Punta Engaño Road, Lapu-Lapu City</p>
                                    </div>
                             
                                    <!-- <p class="font-poppins lg:text-[16px] text-[12px] mt-8 ml-1 self-center">Interested?</p>                           -->
                            </div><!--end of featured property description -->
                            <!-- image section -->
                            <div class="relative lg:ml-[2rem] lg:mt-[3.5rem] ml-1 lg:mx-auto lg:max-w-[1000px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-[50px] pn:-mt-[0.90px] pn:w-[400px] pn:h-[330px] lg:w-[800px] lg:h-[530px]">
                                    <img src="/images/vertexcoast.png" alt="" style="" class="w-auto h-auto">
                            </div>
                            <!-- end of image section -->
                        </div>
                    </li>

                    </ul>
                    <!-- slider buttons -->
                    <div class="-mt-[12rem] self-center lg:-mt-[18rem] lg:ml-[31rem] lg:w-[700px] pn:w-[90vw] pn:ml-[2rem] flex flex-row justify-between px-2">
                        <button id="prevButtonslider1" class="p-3 text-black rounded-full bg-dirtywhite opacity-75">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button id="nextButtonslider1" class="p-3 text-black bg-dirtywhite opacity-75 rounded-full">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div> <!-- end of buttons -->

                
        
        <!-- start of buy or rent  -->
        <div class="flex flex-col lg:flex-row mt-[12rem] lg:mt-[25rem] lg:ml-[7rem] px-[4rem] space-x-[10px]">
                <img src="/images/BDRSPost.png" alt="" style="" class="h-auto w-auto border-2 border-white shadow-md rounded-md">

                <div class="flex flex-col justify-center place-items-center mt-12 ml-[5rem] px-2 pn:ml-[10rem] lg:px-4 py-4 w-[180px] lg:w-[600px]">
                        <p class="font-rozha lg:text-[55px] text-[25px] font-medium">EMPOWERING</p>
                        <p class="font-rozha lg:text-[55px] text-[25px] font-medium -mt-[1.1rem] lg:-mt-[2.5rem]">YOUR CHOICE</p>
                        <p class="font-playfair lg:text-[50px] text-[16px] font-medium">Buy or Rent</p>
                        <p class="font-playfair lg:text-[50px] text-[14px] font-medium">We've got you covered.</p>
                        <p class="font-poppin lg:text-[25px] text-[14px] font-medium mt-[3rem]">See Properties</p>
                        <div class="flex flex-row self-center mt-5 space-x-5">
                            <div class="border-2 bg-gold border-darkblue hover:bg-dirtywhite shadow-md w-max h-max px-3 py-2">
                                <a href="{{route('posts.showbuy')}}" class="font-playfair text-[18px] font-semibold hover:text-darkblue" style="text-decoration: none; color:black;">BUY</a>
                            </div>
                            <div class="self-center border-2 bg-gold border-darkblue hover:bg-dirtywhite shadow-md w-max h-max px-3 py-2">
                                <a href="{{route('posts.showrent')}}" class="font-playfair text-[18px] font-semibold hover:text-darkblue" style="text-decoration: none; color:black;">RENT</a>
                            </div>
                        </div>
                </div>
        </div>
        <!-- end of buy or rent -->
           

        <div class="mt-[5rem] bottom-0 w-full">@include('layouts.footer')</div>
           


               
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Function to initialize a slider
        function initializeSlider(sliderID) {
            let currentSlideID = 1;
            let sliderElement = document.getElementById(sliderID);
            let totalSlides = sliderElement ? sliderElement.childElementCount : 0;
            console.log(`Slider ID: ${sliderID}`);
        console.log(`Total Slides: ${totalSlides}`);

            if (sliderElement) {
                // Get references to the buttons for this slider
                let prevButton = document.getElementById(`prevButton${sliderID}`);
                let nextButton = document.getElementById(`nextButton${sliderID}`);


                if (prevButton && nextButton) {
                    prevButton.addEventListener('click', prev);
                    nextButton.addEventListener('click', next);
                }

                function next() {
                    console.log('Next button clicked');
                    if (currentSlideID < totalSlides) {
                        currentSlideID++;
                        showSlide();
                    }
                }

                function prev() {
                    console.log('prev button clicked');
                    if (currentSlideID > 1) {
                        currentSlideID--;
                        showSlide();
                    }
                }

                function showSlide() {
                    slides = sliderElement.getElementsByTagName('li');
                    for (let index = 0; index < totalSlides; index++) {
                        const element = slides[index];
                        if (currentSlideID === index + 1) {
                            element.classList.remove('hidden');
                        } else {
                            element.classList.add('hidden');
                        }
                    }
                }
            }
        }

        // Initialize each slider
        initializeSlider('slider1');
        // Initialize more sliders as needed

      function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }

    });

    </script>

    </body>
</html>
