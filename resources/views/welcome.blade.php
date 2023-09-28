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
                        <a href="" class="font-poppins text-[14px] underline underline-offset-4 self-center">Click Here</a>
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


                <div class = "flex flex-col absolute mt-[50rem] justify-start left-[15rem] ">                                               
                        <img src="images/bldg1.jpg" alt="" class="w-[50rem] h-[55rem]">                                 
                </div>
                <div class = "flex flex-col absolute mt-[60rem] left-[75rem] gap-5">
                    <p class = "flex justify-center text-center font-rozha font-bold text-7xl tracking-widest">Empowering <br>
                        Your Choice<br></p>
                  
                    <p class = "flex justify-center text-center font-playfair font-bold text-4xl tracking-widest" >
                        Buy or Rent,<br>
                        We've got you<br>
                        covered<br></p>
                        <br>
                        <p class = "flex justify-center text-center font-poppin font-bold text-xl tracking-widest">SEE PROPERTIES</p>

                         <!--button for buy and rent-->
                
                <br><br><div class = "gap-10 flex sm:justify-start md:justify-center items-center"> 
                    
                    <button class = "border-solid border-darkblue border-4 bg-amber-200 hover:bg-amber-100  text-black  py-4 px-6 rounded " >  
                        <h1 class = "font-poppin uppercase text-2xl sm:text-base md:text-lg lg:text-xl xl:text-2xl tracking-wider ">FOR SALE  </h1>  

                            <button class = "border-solid border-darkblue border-4 bg-amber-200 hover:bg-amber-100 text-black py-4 px-6 rounded ">  
                                <h1 class = "font-poppin uppercase text-2xl sm:text-base md:text-lg lg:text-xl xl:text-2xl tracking-wider">FOR RENT  </h1>
                           
                    </div>  
                </div>
           
                <div class = "flex flex-col absolute mt-[105rem] justify-start left-[15rem] ">   
                                  
                    <br><br><br> <p class = "flex justify-start text-left font-rozha text-7xl">News and<br>
                        Events </p> 
                        
                        <div class = "flex flex-col absolute mt-[4rem] left-[30rem] ">   
                            <br><br><br><hr class="border-t-2 border-black w-[68rem]">         
                    <p class = " justify-start text-right font-rozha text-7xl"><br>  
                    </div>         
                </div>
                

                <!--Heading-->
                <div class = "flex flex-col absolute mt-[120rem] justify-start left-[7rem] "> 
                    <br><br><div class="w-[103rem] h-[30rem] border-4 border-amber-300 bg-amber-100">
                        <p>Empty</p>
                    </div>
                </div>
               
               

                
                

                







                <!--about me

                <div class = "absolute flex sm:justify-start md:justify-center mt-[48rem] w-1/8  ">          
                    <div class="">
                <p class="text-sm sm:text-base lg:text-xl xl:text-5xl font-poppin underline">                 
                                MEET OUR AMAZING LEADERS</p>
                    </div>
                </div>
-->
                
           
                 <!--Marketing Head

                  <div class = "flex flex-col absolute mt-[65rem] left-[60rem] sm:justify-start  "> 
                    <img src="/images/b3.jpg" alt="" class="rounded-full w-[18rem] h-[20rem] overflow-hidden mt-[2rem] border-4 border-x-8 border-y-8 border-double border-darkblue"> 
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6 items-center"><br><br>
                      
                    </div>                          
                        <div class = "flex flex-col absolute  mt-[3rem] left-[22rem] w-[27rem] h-1/2 gap-3 ">
                            <p class="text-sm sm:text-base font-baby md:text-lg lg:text-xl xl:text-5xl flex flex-col bg-yellow-100 text-center">
                               Marketing Head
                             </p>
                             <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl flex flex-col font-playfair text-center ">
                                Benhur Medillo</p>
                             <p class = "text-justify inline-block sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-full 2xl:w-full font-poppin">
                                "Working with BDRS is such a blessing. It does not only shape our character to be a better individual 
                                but evolve our passion and purpose in providing the best service. We at BDRS have always been with our
                                 clients and will always serve what truly matters to them."</p>                              
                 </div>
         </div>
 -->
                 <!--COO

                <div class = "flex flex-col absolute mt-[50rem] justify-start left-[7rem] ">          
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6 items-center"><br><br>
                        <img src="/images/b1.png" alt="" class="rounded-full w-[100rem] h-[20rem] overflow-hidden mt-[3rem] border-4 border-x-8 border-y-8 border-double border-darkblue">
                    </div>
                            
                        <div class = "flex flex-col absolute  mt-[4rem] left-[20rem] w-1/4 h-1/2 gap-3 " >
                            <p class="text-sm sm:text-base font-baby md:text-lg lg:text-xl xl:text-5xl flex flex-col bg-yellow-100 text-center">
                               President
                             </p>
                             <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl flex flex-col font-playfair text-center">
                                Jerome Barbanida</p>
                             <p class = "text-justify inline-block sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-full 2xl:w-full font-poppin">
                                Lorem Ipsum, a dummy text in the printing and typesetting industry, has been used since
                                 the 1500s. It has been popularized in the 1960s with Letraset sheets and desktop 
                                 publishing software like Aldus PageMaker.</p>                              
                 </div>                 
--> 
                 <!--Chairwoman

                 <div class = "flex flex-col absolute mt-[27rem] justify-start left-[0rem] ">          
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6 items-center "><br><br>
                        <br><br><br><img src="/images/b2.png" alt="" class="rounded-full w-[100rem] h-[20rem] overflow-hidden border-4 border-x-8 border-y-8 border-double border-darkblue">
                    </div>
                            
                    <br><br><div class = "flex flex-col absolute  mt-[5rem] left-[20rem] w-1/4 h-1/2 gap-3 " >
                            <p class="text-sm sm:text-base font-baby md:text-lg lg:text-xl xl:text-5xl flex flex-col bg-yellow-100 text-center">
                               Chairwoman
                             </p>
                             <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl flex flex-col font-playfair text-center">
                                Novellyn G. Quiambao</p>
                             <p class = "text-justify inline-block sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-full 2xl:w-full font-poppin">
                                "Despite the global pandemic, BDRS Realty Management Services Co. has achieved a milestone in 
                                valuing client needs and achieving greater heights, standing up their slogan of Bridging Homes, Touching Lives.

                             </p>                              
                 </div>     
           </div>
    </div>
->

                   <!--connect with us

                  

                        <div class = "flex flex-col absolute mt-[115rem] justify-start left-[50rem]">  
                            
                             <div class = "flex flex-col mt-[0rem] justify-start right-[45rem]">
                                 <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl font-anton tracking-widest">
                                CONNECT WITH US                                   
                                </p>                              
                             </div>
                        </div>

                        <div class = "flex flex-col absolute mt-[118rem] justify-start left-[37rem] font-poppin"> 
                            <p>We provide a variety of customer care options if you require assistance.<br><br>
                            </p>
                        </div>
-->

                        <!--gif
                        <div class = "flex flex-col absolute mt-[128rem] justify-start left-[60rem]">  
                                <img src ="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExdXdqN2I0d244ODlzMDNqcW8zcGt5dTcza3N6OG9tdnQ0YmQ5NDhoaiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/26SdS6M9jzxdqq72JU/giphy.gif ">
                        </div>
-->







                <!--contact

                            
                        <br>
-->
                        <!--Email
                      
                        <div class = "flex flex-col absolute mt-[125rem] justify-start left-[30rem]">
                            <button class = "border-solid border-darkblue border-4 hover:bg-blue-200">
                            <div class="contactus-details  ">
                                <br>
							    <div class="contactus-icon ">
								<a href="mailto:customerservice@bdrs-realty.com "><i class="fa-solid fa-envelope fa-2xl hover:text-white "></i></a>
								<h3 class = "font-anton"><br>Email</h3>
							    </div>
							<div class="contaus-det ">
								<a href="mailto:customerservice@bdrs-realty.com"><br><h4 class = "font-poppin hover:text-white">&nbsp;&nbsp;customerservice@bdrs-realty.com&nbsp;&nbsp;</h4></a>
                            </button>
                                  </div>
							</div>
						</div>
-->

                        <!--Mobile

                        <div class = "flex flex-col absolute mt-[108rem] justify-start left-[30rem]">
                            <button class = "border-solid border-darkblue border-4 hover:bg-blue-200">
                            <div class="contactus-details ">
                                <br>
                                <div class="contactus-icon">
                                    <a href="tel:9173110192"><i class="fa-solid fa-mobile-screen fa-2xl hover:text-white"></i></a>
                                    <h3 class= "font-anton"><br>Mobile</h3>
                                </div>
                                <div class="contaus-det">
                                    <a href="tel:9173110192"><br><h4 class= "font-poppin hover:text-white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+63-917-311-0192&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4></button>
                                </div>
                            </div>
                        </div>
-->

                        <!--Telephone-->

<!--animated office gif   https://giphy.com/gifs/animation-loop-life-26SdS6M9jzxdqq72JU

                        <div class = "flex flex-col absolute mt-[118rem] justify-start left-[30rem] gap-3">
                            <button class = "border-solid border-darkblue border-4 hover:bg-blue-200">
                            <div class="contactus-details ">
                                <br>
                                <div class="contactus-icon">
                                    <a href="#"><i class="fa-solid fa-phone fa-2xl hover:text-white"></i></a>
                                    <h3 class= "font-anton"><br>Telephone</h3>
                                </div>
                                <div class="contaus-det">
                                    <a href="tel:0324076687"><br><h4 class = "font-poppin hover:text-white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+032-407 6687&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
-->


        <!--INQUIRY
                     <div class= "mt-[140rem] flex justify-center">

                        INQUIRY

                     </div>
-->
                       

































                   

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
