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
        <div class="flex flex-col ml-[1.8rem] justify-center self-center mt-[2rem] border-2 border-darkblue shadow-inner">
            <div class="">
                <img src="images/collageOne.png">
            </div> 
           
            <div class="absolute flex flex-col justify-center px-2 py-2 h-[400px] w-[1000px] mt-[9rem] lg:mt-[25rem] lg:ml-[29rem] pn:ml-[3rem]">
                    <p class="ml-[8rem] -mt-6 font-playfair lg:text-[60px] text-dirtywhite text-[16px]">We are the key</p>
                <div class="flex flex-row px-2 lg:-mt-[3rem] pn:-mt-[1rem] pn:ml-[8.5rem] lg:ml-[10rem] mb-1">
                    <p class="font-playfair mt-2 lg:text-[60px] text-[16px] text-dirtywhite">to your new</p>
                    <p class="font-baby lg:text-[78px] text-[18px] pn:mt-2 pn:ml-1 text-dirtywhite lg:ml-2">Home</p>
                </div>
                <div class="self-center lg:-ml-[13rem] -ml-[35rem] lg:-mt-5 -mt-1 border-2 border-dirtywhite bg-darkblue hover:bg-dirtywhite shadow-md lg:w-max lg:h-max lg:px-3 lg:py-2 pn:w-[80px] pn:h-[25px] text-center">
                    <a href="{{route('posts.viewproperties')}}" class="font-playfair text-center text-dirtywhite lg:text-[18px] text-[12px] font-semibold hover:text-darkblue">explore now.</a>
                </div>
            </div>



        </div>
        <!-- end of landing page welcome content -->

        <!-- start of featured content -->
        <div class="flex flex-col justify-start mt-3 lg:mt-[5rem] h-[732px] w-full">
                <div class="flex flex-row justify-evenly self-center mt-5 w-max h-[100px]">
                    <p class="font-playfair text-[20px] lg:text-[68px] ml-2 sm:text-start md:text-center ">Sell,</p>
                    <p class="font-playfair text-[20px] lg:text-[68px] lg:ml-8 ml-2"> Buy,</p>
                    <p class="font-playfair text-[20px] lg:text-[68px] lg:ml-8 ml-2"> Rent,</p>
                    <p class="font-playfair text-[20px] lg:text-[68px] lg:ml-8 ml-2"> Brokerage</p>
                </div>
                <div class="flex flex-col justify-items-center lg:ml-4 pn:ml-8 pn:mt-[10px]">
                    <p class="font-poppins lg:text-[28px] lg:w-max pn:w-[350px] text-[12px] self-center">Helping you find the property that suits your lifestyle and needs.<br></p>
                </div>

                <ul class="slider flex flex-col justify-items-center" id="slider1">
                    <li class="relative">
                        <div class="flex lg:flex-row pn:flex-col justify-evenly self-start lg:mt-[5rem] pn:mt-2 ml-[2rem] w-max h-max">
                            <!-- featured property description -->
                            <div class="lg:flex lg:flex-col pn:grid pn:grid-cols-2 justify-center w-[400px] h-max lg:w-[430px] lg:h-[530px] px-[2rem] pn:ml-[4px] pn:mb-2 py-4 mt-14 lg:ml-[5rem] border-t-2 border-l-2 border-r-2 lg:border-b-2 lg:border-r-0 border-darkblue">
                                    <p class="font-playfair self-center mb-8 mr-8 -mt-[10rem] pn:mt-4 lg:text-[38px] underline underline-offset-8">FEATURED</p>
                                    <div>
                                    <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2">NAME</p>
                                    <p class="font-poppins lg:text-[28px] text-[14px]">Taft East Gate</p>
                                    </div>
                                    <div>
                                    <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2">TYPE</p>
                                    <p class="font-poppins lg:text-[28px] text-[14px]">Condominium Complex</p>
                                    </div>
                                    <div class="ml-2 lg:ml-0"> 
                                    <p class="font-poppins lg:text-[18px] text-[12px] underline underline-offset-4 mt-2 ">ADDRESS</p>
                                    <p class="font-poppins lg:text-[28px] text-[12px] w-[150px] lg:w-[300px]">8 Cardinal Rosales Avenue, corner Pope John Paul II Ave, Cebu City, 6000 Cebu</p>
                                    </div>
                             
                                    <p class="font-poppins lg:text-[16px] text-[12px] mt-8 ml-1 self-center">Interested?</p>                          
                            </div><!--end of featured property description -->
                            <!-- image section -->
                            <div class="relative lg:ml-[2rem] lg:mt-[3.5rem] pn:ml-1 lg:mx-auto lg:max-w-[1000px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-[50px] pn:-mt-[0.90px] pn:w-[400px] pn:h-[330px] lg:w-[800px] lg:h-[530px]">
                                    <img src="/images/tafteastgate.png" alt="" style="" class="w-auto h-auto">
                            </div>
                            <!-- end of image section -->
                        </div>
                    </li>
                    <li class="relative hidden">
                        <div class="flex lg:flex-row pn:flex-col justify-evenly self-start lg:mt-[10rem] pn:mt-2 ml-[2rem] w-max h-max">
                            <!-- featured property description -->
                            <div class="lg:flex lg:flex-col pn:grid pn:grid-cols-2 justify-center w-[400px] h-max lg:w-[430px] lg:h-[530px] px-[2rem] pn:ml-[4px] pn:mb-2 py-4 mt-14 lg:ml-[5rem] border-t-2 border-l-2 border-r-2 lg:border-b-2 lg:border-r-0 border-darkblue">
                                    <p class="font-playfair self-center mb-8 mr-8 -mt-[10rem] pn:mt-4 lg:text-[38px] underline underline-offset-8">FEATURED</p>
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
                             
                                    <p class="font-poppins lg:text-[16px] text-[12px] mt-8 ml-1 self-center">Interested?</p>                          
                            </div><!--end of featured property description -->
                            <!-- image section -->
                            <div class="relative lg:ml-[2rem] lg:mt-[3.5rem] pn:ml-1 mx-auto max-w-[1000px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-[50px] pn:-mt-[0.90px] pn:w-[400px] pn:h-[330px] lg:w-[800px] lg:h-[530px]">
                                    <img src="/images/vertexcentral.jpg" alt="" style="" class="w-auto h-auto">
                            </div>
                            <!-- end of image section -->
                        </div>
                    </li>
                    <li class="relative hidden">
                        <div class="flex lg:flex-row pn:flex-col justify-evenly self-start lg:mt-[10rem] pn:mt-2 ml-[2rem] w-max h-max">
                            <!-- featured property description -->
                            <div class="lg:flex lg:flex-col pn:grid pn:grid-cols-2 justify-center w-[400px] h-max lg:w-[430px] lg:h-[530px] px-[2rem] pn:ml-[4px] pn:mb-2 py-4 mt-14 lg:ml-[5rem] border-t-2 border-l-2 border-r-2 lg:border-b-2 lg:border-r-0 border-darkblue">
                                    <p class="font-playfair self-center mb-8 mr-8 -mt-[10rem] pn:mt-4 lg:text-[38px] underline underline-offset-8">FEATURED</p>
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
                             
                                    <p class="font-poppins lg:text-[16px] text-[12px] mt-8 ml-1 self-center">Interested?</p>                          
                            </div><!--end of featured property description -->
                            <!-- image section -->
                            <div class="relative lg:ml-[2rem] lg:mt-[3.5rem] pn:ml-1 lg:mx-auto lg:max-w-[1000px] overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4 mb-10 mt-[50px] pn:-mt-[0.90px] pn:w-[400px] pn:h-[330px] lg:w-[800px] lg:h-[530px]">
                                    <img src="/images/vertexcoast.png" alt="" style="" class="w-auto h-auto">
                            </div>
                            <!-- end of image section -->
                        </div>
                    </li>
                  
                </ul>
                  <!-- slider buttons -->
                  <div class="absolute self-center mt-[30rem] lg:mt-[40rem] lg:ml-[30rem] lg:w-[790px] pn:w-[400px] pn:ml-[34px] flex flex-row justify-between px-2">
                            <button id="prevButtonslider1" class="p-3 text-black rounded-full bg-dirtywhite opacity-75">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button  id="nextButtonslider1" class="p-3 text-black bg-dirtywhite opacity-75 rounded-full">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                     </div> <!-- end of buttons -->
        </div> <!-- end of featured content -->
        
        <!-- start of buy or rent  -->
        <div class="flex flex-row -ml-[1rem] mt-[3rem] lg:mt-[15rem] lg:ml-[2rem] px-[4rem] space-x-[3rem]">
                <img src="/images/bldg1 - Copy1.jpg" alt="" style="" class="h-auto w-auto">

                <div class="flex flex-col justify-center place-items-center px-2 lg:px-4 py-4 w-[480px] lg:w-[800px]">
                        <p class="font-rozha lg:text-[55px] text-[25px] font-medium">EMPOWERING</p>
                        <p class="font-rozha lg:text-[55px] text-[25px] font-medium -mt-[1.1rem] lg:-mt-[2.5rem]">YOUR CHOICE</p>
                        <p class="font-playfair lg:text-[50px] text-[16px] font-medium">Buy or Rent</p>
                        <p class="font-playfair lg:text-[50px] text-[14px] font-medium">We've got you covered.</p>
                        <p class="font-poppin lg:text-[25px] text-[14px] font-medium mt-[3rem]">See Properties</p>
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
        <!-- <div class = "flex flex-col absolute mt-[5rem] ml-[13rem] justify-start">   
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
        </div> -->
        <div style="display: flex; flex-direction: column; position: absolute; margin-top: 5rem; margin-left: 13rem; justify-content: start;">

        <div style="display: flex; flex-direction: row; align-items: center; margin-bottom: 2rem;">
            <p style="font-family: 'Rozha One', serif; font-size: 44px; margin-right: 1rem;">News & Events</p>
            <div style=" margin-left:5px;width: 70%; border-bottom-width: 3px; border-bottom-color: #000000;">
            </div>
        </div>

        <div style="display: flex; flex-wrap: wrap; gap: 2rem; margin-left: -2rem;">

            @foreach($updates as $update)
            <div style="width: 18rem; margin: 0 2rem 2rem 0; border-radius: 1rem; overflow: hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); transition: box-shadow 0.3s ease-in-out, transform 0.5s ease-in-out;">

                <div style="position: relative; overflow: hidden; border-radius: 1rem;">

                    <img style="width: 100%; height: 500px; object-fit: cover; border-radius: 1rem 1rem 0 0; transition: transform 0.5s ease-in-out;" src="bdrsrealty/public/{{$update->coverphoto}}" alt="Update Image">

                    <div style="padding: 1rem; background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.7)); color: #fff; position: absolute; bottom: 0; left: 0; right: 0;">

                        <h2 style="font-size: 1.5rem; margin-bottom: 0.5rem; font-family: 'Playfair Display', serif; color: white; font-weight: bold;">{{$update->titleHeading}}</h2>

                        <p style="margin-bottom: 0; color: #ccc; font-size: 1rem; font-weight: 600;">
                            <?php
                            $paragraph = $update->description;
                            $maxCharacters = 200;
                            echo strlen($paragraph) > $maxCharacters ? substr($paragraph, 0, $maxCharacters) . '...' : $paragraph;
                            ?>
                        </p>

                        <a href="{{route('posts.showupdate', $update->id)}}" style="color: #FFD700; text-decoration: none; transition: color 0.3s ease-in-out; display: inline-block; margin-top: 1rem;">Read more <i class="fa-solid fa-arrow-right"></i></a>
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
