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
        @include('layouts.navigation')
        <!-- navigation -->
        <!-- <div class="flex flex-row mt-2 absolute mr-10 right-0">
            @auth
            @hasanyrole('Admin|Customer Service|Marketing')
            <a href="{{route('dashboard')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">DASHBOARD</a>
            @endhasanyrole
            @role('User')
            <a href="{{route('posts.viewproperties')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">PROPERTIES</a>
            @endrole
            @else
            <a href="{{route('login')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">LOGIN</a>
            @endauth
            <a href="{{route('aboutpage')}}" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">ABOUT US</a>
            <a href="" class="px-8 py-2 font-poppin text-[22px] font-medium text-black">UPDATES</a>
        </div> -->

        <!-- start of  content -->
        <div class="flex flex-col justify-center place-items-center mt-10 w-full h-max">
           <div class="flex flex-col mb-[5rem]">
            <p class="font-rozha text-[62px] text-black self-center mt-[10rem]">About Us</p>
            <p class="font-poppins text-[32px] text-black self-center -mt-2 font-semibold ml-4">BDRS Realty Management Services Co.</p>
           </div>

           <div class="flex flex-row justify-center place-items-center w-full h-[500px] mt-[2rem] px-4 py-4">
                <div class="w-[1500px] h-[500px] ml-2 mt-[30rem]">
                    <img src="images/logo.png" alt="" style="width: 400px; height: 400px;" class="ml-[5rem] mt-10 self-center">
                </div>
                <div class="flex flex-col ml-[rem] mt-[14rem]">
                    <p class="font-rozha text-[72px] text-black mt-10 ml-[32rem] mb-5">Our Story</p>
                        <table class="table-auto border-spacing-2 ml-10 border-r-black border-r-2 mr-8">
                            <tbody>
                                <tr class="">
                                    <th scope="row" class="px-6 py-4 font-poppin text-[18px] text-black self-center">
                                        2017-2018
                                    </th>
                                    <td class="px-8 py-4 font-poppin text-[16px] text-black">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row" class="w-[20rem] px-6 py-4 font-poppin text-[18px] text-black self-center">2019</th>
                                <td class="px-8 py-4 font-poppin text-[16px] text-black">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </td>
                                </tr>
                                <tr>
                                <th scope="row" class="px-6 py-4 font-poppin text-[18px] text-black self-center">2020-2022</th>
                                <td class="px-8 py-4 font-poppin text-[16px] text-black">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row" class="px-6 py-4 font-poppin text-[18px] text-black self-center">2023-Present</th>
                                <td class="px-8 py-4 font-poppin text-[16px] text-black">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                </div>
           </div>
                
           <p class="font-playfair text-[82px] text-black self-center mt-[20rem]">Our Brand Identity</p>
            <div class="border-b-1 border-black"></div>
            <div class="flex flex-row justify-center place-items-center h-max w-max mt-[8rem] space-x-[8rem]">
                    <div class="flex flex-col justify-start place-items-center h-[500px] w-max mt-12">
                        <p class="font-rozha text-[92px] text-black self-center mt-8">Realty</p>
                        <p class="w-[40rem] h-[200px] px-6 py-4 font-poppin text-[22px] text-black self-center break-words indent-8">Experience a world of possibilities with our expert consultancy services tailored to your real estate dreams. Discover the perfect lifestyle that suits your desires and needs, all while ensuring the utmost security and peace of mind. Explore a diverse range of options and embark on your journey towards the ideal living experience with confidence.</p>
                    </div>
                    <div class="flex flex-row justify-center place-items-center bg-black h-[500px] w-[500px]">
                            <div class="bg-darkblue border-2 border-black h-[500px] w-[500px] shadow-lg"></div>
                            <div class="flex flex-col justify-center items-center absolute bg-dirtywhite border-2 border-black h-[500px] w-[500px] mr-12 mt-10">
                                <img src="images/realty.jpg" alt="" style="height:460px; width:460px;" class="border-4 border-greywhite rounded-md shadow-inner">
                            </div>
                    </div>
            </div>

            <div class="flex flex-row justify-center place-items-center h-max w-max mt-[12rem] space-x-[10rem]">
                    <div class="flex flex-row justify-center place-items-center bg-black h-[500px] w-[500px]">
                            <div class="bg-darkblue border-2 border-black h-[500px] w-[500px] shadow-lg"></div>
                                    <div class="flex flex-col justify-center items-center absolute bg-dirtywhite border-2 border-black h-[500px] w-[500px] mr-12 mt-10">
                                        <img src="images/management.jpg" alt="" style="height:460px; width:460px;" class="border-4 border-greywhite rounded-md shadow-inner">
                                    </div>
                    </div>

                    <div class="flex flex-col justify-start place-items-center h-[500px] w-max mt-12">
                        <p class="font-rozha text-[92px] text-black self-center mt-8">Management</p>
                        <p class="w-[50rem] h-[200px] px-6 py-4 font-poppin text-[22px] text-black self-center break-words indent-8">Elevate your investment strategy with our exclusive MANAGEMENT services, designed to not only save you valuable time but also guarantee exceptional returns on your investments. Our expert team is dedicated to guiding you in making the most informed and profitable choices, ensuring that your assets are managed to exceed even the loftiest of expectations. Let us empower your investments and turn your aspirations into a reality.</p>
                    </div>
            </div>

        <div class="flex flex-row justify-center place-items-center h-max w-max mt-[11rem] space-x-[10rem]">
                <div class="flex flex-col justify-start place-items-center h-[500px] w-max mt-12">
                                <p class="font-rozha text-[92px] text-black self-center mt-8">Services</p>
                                <p class="w-[50rem] h-[200px] px-6 py-4 font-poppin text-[22px] text-black self-center break-words indent-8">We champion the art of exemplary service, going above and beyond without expecting anything in return. It's not just about the business at hand; it's about the dedication to deliver the absolute best in service, elevating the customer experience to unparalleled heights.</p>
                </div>
                    <div class="flex flex-row justify-center place-items-center bg-black h-[500px] w-[500px]">
                            <div class="bg-darkblue border-2 border-black h-[500px] w-[500px] shadow-lg"></div>
                                    <div class="flex flex-col justify-center items-center absolute bg-dirtywhite border-2 border-black h-[500px] w-[500px] mr-12 mt-10">
                                        <img src="images/services.jpg" alt="" style="height:460px; width:460px;" class="border-4 border-greywhite rounded-md shadow-inner">
                                    </div>
                    </div>
        </div>

        <p class="font-playfair text-[82px] text-black self-center mt-[10rem]">Our Core Commitments</p>

        <div class="flex flex-row justify-center place-items-center h-max w-max mt-[2rem]">
            <div class="flex flex-row justify-center place-items-center shadow-lg px-5 py-7 space-x-[3rem]">
                <div class="">
                    <img src="images/4.png" alt="" style="height:460px; width:460px;" class="border-4 border-gold rounded-md shadow-md">
                </div>
                <div class="">
                    <img src="images/5.png" alt="" style="height:460px; width:460px;" class="border-4 border-gold rounded-md shadow-md">
                </div>
                <div class="">
                    <img src="images/6.png" alt="" style="height:460px; width:460px;" class="border-4 border-gold rounded-md shadow-md">
                </div>
            </div>
        </div>

        <p class="font-playfair text-[82px] text-black self-center mt-[10rem]">Our Leaders</p>

        <div class="flex flex-col justify-center place-items-center h-max w-max mt-[2rem]">
                <div class="flex flex-row">
                    <img src="images/SirJerome.png" alt="" style="height:260px; width:260px;" class="absolute border-4 border-gold bg-dirtywhite rounded-md shadow-md">
                    <div class="flex flex-col bg-dirtywhite border-2 border-darkblue shadow-lg ml-[10rem] mt-10 w-max">'
                            <div class="ml-[8rem] px-3 py-3 w-[800px]">
                                <p class="font-playfair text-[42px] text-black self-start mr-10 font-semibold border-b-2 border-gold mb-4 ">President Jerome Barbanida</p>
                                <p class="font-poppin text-[22px] text-black self-start mr-10 mb-4">As the President of a thriving Realty Company, I've embarked on a journey of leadership, innovation, and unwavering dedication, shaping the company's success while helping countless individuals find their dream homes and build their futures.</p>
                            </div>
                    </div>
                </div>
                <div class="flex flex-row mt-[3rem]">
                    <img src="images/MamInin.png" alt="" style="height:260px; width:260px;" class="absolute border-4 border-gold bg-dirtywhite rounded-md shadow-md">
                    <div class="flex flex-col bg-dirtywhite border-2 border-darkblue shadow-lg ml-[10rem] mt-10 w-max">'
                            <div class="ml-[8rem] px-3 py-3 w-[800px]">
                                <p class="font-playfair text-[42px] text-black self-start mr-10 font-semibold border-b-2 border-gold mb-4">Chairwoman Novellyn G. Quiambao</p>
                                <p class="font-poppin text-[22px] text-black self-start mr-10 mb-4">As the Chairwoman of our esteemed Realty Company, I've led with a commitment to excellence, fostering growth, and empowering our team to redefine industry standards while creating countless success stories for our clients and partners.</p>
                            </div>
                    </div>
                </div>
        </div>

        @include('layouts.footer')
        
    </div> <!-- end div of col! -->

    </body>
</html>
