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
        <div class="sticky z-50 top-0">
                    @include('layouts.navigation')
        </div> 
        <!-- landing page welcome content -->
        <div class="flex  justify-center ml-5 mt-[2rem]">
            <div class="h-[732px] w-full ml-1 mt-8">
                <img src="images/welcomebg.png" style="width: 1799px; height: 798px;">
            </div>
            <div class="absolute mt-7 -ml-7 bg-greywhite border-2 border-darkblue shadow-inner bg-opacity-80 w-[1800px] h-[802px]">
                <div class="absolute mt-14 px-2 shadow-md">
                    <img src="images/bdrswelcomebg.png" style="width: 1800px; height: 728px;">
                </div>
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
        <!-- end of landing page welcome content -->

        <!-- start of featured content -->
        <div class="flex flex-col justify-start  ml-3 mt-[8rem] h-[732px] w-[1800px]">
                <div class="flex flex-row justify-evenly self-center mt-5 w-max h-[100px]">
                    <p class="font-playfair text-[68px] ml-2 sm:text-start md:text-center ">We Sell,</p>
                    <p class="font-playfair text-[68px] ml-2 ">We Buy,</p>
                    <p class="font-playfair text-[68px] ml-2 ">We Rent</p>
                </div>
                <div class="flex flex-col ml-4">
                    <p class="font-poppins text-[28px] self-center">Helping you find the property that suits your lifestyle and needs.<br></p>
                </div>
                <ul class="slider flex flex-col justify-items-center" id="slider1">
                    <li class="relative">
                        <div class="flex flex-row justify-evenly self-start mt-5 ml-[10rem] w-max h-max">
                            <!-- featured property description -->
                            <div class="flex flex-col justify-center w-[630px] h-[530px] px-[2rem] py-4 mt-14 ml-[2rem] border-t-2 border-l-2 border-b-2 border-darkblue">
                                <p class="font-playfair self-center mb-8 -mt-8 text-[58px] underline underline-offset-8">FEATURED</p>
                                    <p class="font-poppins text-[18px] underline underline-offset-4">NAME</p>
                                    <p class="font-poppins text-[38px]">Taft East Gate</p>
                                    <p class="font-poppins text-[18px] underline underline-offset-4 mt-2">TYPE</p>
                                    <p class="font-poppins text-[38px]">Condominium Complex</p>
                                    <p class="font-poppins text-[18px] underline underline-offset-4 mt-2 ">ADDRESS</p>
                                    <p class="font-poppins text-[28px]">8 Cardinal Rosales Avenue, corner Pope John Paul II Ave, Cebu City, 6000 Cebu</p>
                                    <p class="font-poppins text-[16px] mt-8 ml-2 self-center">Interested?</p> 
                                    @if ($user) 
                                    <a href="{{route('posts.showproperty', $property->id)}}" class="font-poppins text-[14px] underline underline-offset-4 self-center">Click Here</a>
                                    @else
                                    <a href="{{ route('login') }}" class="font-poppins text-[14px] underline underline-offset-4 self-center">Login to View Properties</a>
                                    @endif                               
                            </div><!--end of featured property description -->
                            <!-- image section -->
                            <div class="relative ml-[5rem] mx-auto max-w-[1400px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-[50px]">
                                <div>
                                    <img src="/images/tafteastgate.png" alt="" style="width: 800px; height:500px;">
                                </div>
                            </div>
                            <!-- end of image section -->
                        </div>
                    </li>
                    <li class="relative hidden">
                        <div class="flex flex-row justify-evenly self-start mt-5 ml-[10rem] w-max h-max">
                            <!-- featured property description -->
                            <div class="flex flex-col justify-center w-[630px] h-[530px] px-[2rem] py-4 mt-14 ml-[2rem] border-t-2 border-l-2 border-b-2 border-darkblue">
                                <p class="font-playfair self-center mb-8 -mt-8 text-[58px] underline underline-offset-8">FEATURED</p>
                                    <p class="font-poppins text-[18px] underline underline-offset-4">NAME</p>
                                    <p class="font-poppins text-[38px]">Vertex Central</p>
                                    <p class="font-poppins text-[18px] underline underline-offset-4 mt-2">TYPE</p>
                                    <p class="font-poppins text-[38px]">Condominium Complex</p>
                                    <p class="font-poppins text-[18px] underline underline-offset-4 mt-2 ">ADDRESS</p>
                                    <p class="font-poppins text-[28px]">491 Archbishop Reyes Ave, Cebu City, 6000 Cebu</p>
                                    <p class="font-poppins text-[16px] mt-8 ml-2 self-center">Interested?</p>
                                    @if ($user) 
                                    <a href="{{route('posts.showproperty', $property->id)}}" class="font-poppins text-[14px] underline underline-offset-4 self-center">Click Here</a>
                                    @else
                                    <a href="{{ route('login') }}" class="font-poppins text-[14px] underline underline-offset-4 self-center">Login to View Properties</a>
                                    @endif                               
                            </div><!--end of featured property description -->
                            <!-- image section -->
                            <div class="relative ml-[5rem] mx-auto max-w-[1400px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-[50px]">
                                <div>
                                    <img src="/images/vertexcentral.jpg" alt="" style="width: 800px;">
                                </div>
                            </div>
                            <!-- end of image section -->
                        </div>
                    </li>
                    <li class="relative hidden">
                        <div class="flex flex-row justify-evenly self-start mt-5 ml-[10rem] w-max h-max">
                            <!-- featured property description -->
                            <div class="flex flex-col justify-center w-[630px] h-[530px] px-[2rem] py-4 mt-14 ml-[2rem] border-t-2 border-l-2 border-b-2 border-darkblue">
                                <p class="font-playfair self-center mb-8 -mt-8 text-[58px] underline underline-offset-8">FEATURED</p>
                                    <p class="font-poppins text-[18px] underline underline-offset-4">NAME</p>
                                    <p class="font-poppins text-[38px]">Vertex Coast</p>
                                    <p class="font-poppins text-[18px] underline underline-offset-4 mt-2">TYPE</p>
                                    <p class="font-poppins text-[38px]">Condominium Complex</p>
                                    <p class="font-poppins text-[18px] underline underline-offset-4 mt-2 ">ADDRESS</p>
                                    <p class="font-poppins text-[28px]">Punta Engaño Road, Lapu-Lapu City</p>
                                    <p class="font-poppins text-[16px] mt-8 ml-2 self-center">Interested?</p>
                                    @if ($user) 
                                    <a href="{{route('posts.showproperty', $property->id)}}" class="font-poppins text-[14px] underline underline-offset-4 self-center">Click Here</a>
                                    @else
                                    <a href="{{ route('login') }}" class="font-poppins text-[14px] underline underline-offset-4 self-center">Login to View Properties</a>
                                    @endif                               
                            </div><!--end of featured property description -->
                            <!-- image section -->
                            <div class="relative ml-[5rem] mx-auto max-w-[1400px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-[50px]">
                                <div>
                                    <img src="/images/vertexcoast.png" alt="" style="width: 800px; height:500px;">
                                </div>
                            </div>
                            <!-- end of image section -->
                        </div>
                    </li>
                  
                </ul>
                  <!-- slider buttons -->
                  <div class="absolute self-center mt-[30rem] ml-[52rem] w-[800px] flex flex-row justify-between px-2">
                            <button id="prevButtonslider1" class="p-3 text-black rounded-full bg-dirtywhite opacity-75">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button  id="nextButtonslider1" class="p-3 text-black bg-dirtywhite opacity-75 rounded-full">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                     </div> <!-- end of buttons -->
        </div> <!-- end of featured content -->
        
        <!-- start of buy or rent  -->
        <div class="flex flex-row mt-[15rem] ml-[10rem] px-[4rem] space-x-[3rem]">
                <img src="/images/bldg1.jpg" alt="" style="width:695px; height:701px;">

                <div class="flex flex-col justify-center place-items-center px-4 py-4 w-[800px]">
                        <p class="font-rozha text-[65px] font-medium">EMPOWERING</p>
                        <p class="font-rozha text-[65px] font-medium -mt-[2.5rem]">YOUR CHOICE</p>
                        <p class="font-playfair text-[55px] font-medium">Buy or Rent</p>
                        <p class="font-playfair text-[55px] font-medium">We've got you covered.</p>
                        <p class="font-poppin text-[25px] font-medium mt-[3rem]">See Properties</p>
                        <div class="flex flex-row self-center mt-5 space-x-5">
                            <div class="border-2 bg-gold border-darkblue hover:bg-dirtywhite shadow-md w-max h-max px-3 py-2">
                                <a href="{{route('posts.showbuy')}}" class="font-playfair text-[18px] font-semibold hover:text-darkblue">BUY</a>
                            </div>
                            <div class="self-center border-2 bg-gold border-darkblue hover:bg-dirtywhite shadow-md w-max h-max px-3 py-2">
                                <a href="{{route('posts.showrent')}}" class="font-playfair text-[18px] font-semibold hover:text-darkblue">RENT</a>
                            </div>
                        </div>
                </div>
        </div>
        <!-- end of buy or rent -->
           
        <!-- start of update -->
        <div class = "flex flex-col absolute mt-[5rem] ml-[13rem] justify-start">   
                    <div class="flex flex-row">
                        <div>
                            <p class = "self-center text-center font-rozha text-[5rem]">News &</p>  
                            <p class = "self-center text-center font-rozha text-[5rem] -mt-[3rem]">Events </p>
                        </div>
                        <hr class="h-px my-8 bg-black border-0">
                    </div>
                        <div class="flex flex-row overflow-x-auto space-x-4 p-4 -ml-[4rem] mt-[2rem]">
                            @foreach($updates as $update)
                            <div class="container">
                                <div class="blog__post w-[22rem] shadow-mg border-4 rounded-lg overflow-hidden hover:cursor-pointer group h-[37rem] hover:shadow-xl border-gold">
                                    <div class="relative overflow-hidden">
                                        <img class="flex group-hover:scale-105 transition-transform duration-500 object-cover h-60 w-full" src="{{$update->coverphoto}}" alt="Update Image">
                                        <div class="px-5 pt-5 bg-gradient-to-b text-black font-bold text-lg">
                                            <h2 class="text-2xl text-left font-playfair">{{$update->titleHeading}}</h2>
                                        </div>
                                        <div class="px-6 pb-5">
                                                <?php $paragraph = $update->description ?>
                                                <?php $maxCharacters = 200 ?>
                                                <?php if (strlen($paragraph) > $maxCharacters): ?>
                                                <p class="line-clamp-5 text-left text-gray-700 dark:text-gray-400 text-lg font-light my-4  h4 mb-[10px] font-poppin"><?php echo substr($paragraph, 0, $maxCharacters); ?></p>
                                                <a href="{{route('posts.showupdate', $update->id)}}" class="text-darkblue hover:text-gold">Read more <i class="fa-solid fa-arrow-right"></i></a>
                                                    <?php else: ?>
                                                        <p class = "text-left text-gray-700 dark:text-gray-400 text-lg font-poppin  my-4 h4 mb-[10px]"><?php echo $paragraph; ?></p>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
        </div>
        <!-- end of update -->


        <div class="mt-[65rem]">
            @include('layouts.footer')
        </div>
           


               
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
    });
</script>

    </body>
</html>
