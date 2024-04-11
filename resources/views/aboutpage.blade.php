<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDRS Realty Management Services Co.</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&family=Rozha+One&display=swap" rel="stylesheet">

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->


    </head>
    <body style="background-color:#fffcf2;">
        @include('layouts.navigation')


        <!-- start of  content -->
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin-top: 2rem; width: 100%; max-height: max-content;">
        <div class="flex flex-col ml-[2rem] mb-20">
                <p class="font-rozha text-5xl text-black self-center mt-32 md:text-[44px] md:mt-8">About Us</p>
                <p class="font-poppins text-xl text-black self-center font-semibold mt-4 md:mt-1 md:ml-4">BDRS Realty Management Services Co.</p>
            </div>

            <div class="flex flex-col ml-[3rem] md:flex-row justify-center items-center w-full h-auto md:h-500 mt-8 md:mt-2 px-4 md:px-0 md:py-4">
                <div class="w-[500px] md:w-1/2 lg:w-[400px] h-auto md:h-500 ml-2 md:ml-[2rem] md:mt-1">
                    <img src="images/logo.png" alt="" class="w-40 h-40 md:w-[150px] md:h-[150px] ml-[10rem] md:ml-0 mt-20 md:mt-10 self-center">
                </div>
                <div class="w-full md:w-1/2 lg:w-2/3 flex flex-col md:ml-4 md:mt-0">
                    <p class="font-poppin text-base text-black mt-4 md:text-lg">Established on September 21, 2018, BDRS Realty Management Services Co. has emerged as a prominent player in the real estate sector, garnering the title of the most awarded realty for three consecutive years within its six-year existence. Specializing in top-tier Realty Brokerage, Management, and Services, the company ensures a personalized experience for clients engaged in buying, selling, or property management. The success of BDRS Realty is a testament to the trust earned from a diverse clientele. Beyond real estate, their commitment to excellence extends to sister companies, Patrona Gastro Pub and La Jefa Trading Inc., showcasing a dedication that spans various industries.</p>
                </div>
            </div>

                
            <p class="font-rozha ml-[2rem] text-[42px] text-black self-center mt-72">Our Brand Identity</p>
            <div style="border-bottom: 1px solid #000000;"></div>
            <div class="flex flex-col ml-[6rem] lg:flex-row justify-center items-center max-h-max max-w-max -mt-[5rem] gap-x-4">
                <div class="flex flex-col justify-start items-center lg:h-[500px] max-w-max mt-48">
                    <p class="font-rozha text-2xl lg:text-[22px] text-black self-center mt-8">Realty</p>
                    <p class="w-[400px] h-[200px] px-6 py-4 font-poppins text-base text-black self-center break-words text-indent-8">Experience a world of possibilities with our expert consultancy services tailored to your real estate dreams. Discover the perfect lifestyle that suits your desires and needs, all while ensuring the utmost security and peace of mind. Explore a diverse range of options and embark on your journey towards the ideal living experience with confidence.</p>
                </div>
                <div class="flex flex-row justify-center items-center h-[500px] w-[500px]">
                    <div class="bg-blue-800 border-2 border-black h-[400px] w-[400px] shadow-md"></div>
                    <div class="flex flex-col justify-center items-center absolute bg-gray-200 border-2 border-black h-[400px] w-[400px] mr-12 mt-8">
                        <img src="images/realty.jpg" alt="" class="h-[360px] w-[360px] border-4 border-gray-200 rounded-md shadow-inner">
                    </div>
                </div>
            </div>

            <div class="flex flex-col ml-[6rem] lg:flex-row justify-center items-center max-h-max max-w-max -mt-[5rem] gap-x-4">
                <div class="flex flex-col justify-start items-center lg:h-[500px] max-w-max mt-48">
                    <p class="font-rozha text-2xl lg:text-[22px] text-black self-center mt-8">Management</p>
                    <p class="w-[400px] h-[200px] px-6 py-4 font-poppins text-base text-black self-center break-words text-indent-8">Elevate your investment strategy with our exclusive MANAGEMENT services, designed to not only save you valuable time but also guarantee exceptional returns on your investments. Our expert team is dedicated to guiding you in making the most informed and profitable choices, ensuring that your assets are managed to exceed even the loftiest of expectations. Let us empower your investments and turn your aspirations into a reality.</p>
                </div>
                <div class="flex flex-row justify-center items-center h-[500px] w-[500px] mt-[3rem]">
                        <div class="bg-blue-800 border-2 border-black h-[400px] w-[400px] shadow-md"></div>
                        <div class="flex flex-col justify-center items-center absolute bg-gray-200 border-2 border-black h-[400px] w-[400px] mr-12 mt-4">
                            <img src="images/management.jpg" alt="" class="h-[360px] w-[360px] border-4 border-gray-200 rounded-md shadow-inner">
                        </div>
                    </div>
            </div>

            <div class="flex flex-col ml-[6rem] lg:flex-row justify-center items-center max-h-max max-w-max -mt-[5rem] gap-x-4">
                <div class="flex flex-col justify-start items-center lg:h-[500px] max-w-max mt-48">
                    <p class="font-rozha text-2xl lg:text-[22px] text-black self-center mt-8">Services</p>
                    <p class="w-[400px] h-[200px] px-6 py-4 font-poppins text-base text-black self-center break-words text-indent-8">>We champion the art of exemplary service, going above and beyond without expecting anything in return. It's not just about the business at hand; it's about the dedication to deliver the absolute best in service, elevating the customer experience to unparalleled heights.</p>
                </div>
                <div class="flex flex-row justify-center items-center h-[500px] w-[500px]">
                    <div class="bg-blue-800 border-2 border-black h-[400px] w-[400px] shadow-md"></div>
                    <div class="flex flex-col justify-center items-center absolute bg-gray-200 border-2 border-black h-[400px] w-[400px] mr-12 mt-8">
                        <img src="images/services.jpg" alt="" class="h-[360px] w-[360px] border-4 border-gray-200 rounded-md shadow-inner">
                    </div>
                </div>
            </div>



            <p class="font-rozha ml-[32rem] text-[32px] lg:[44px] text-black self-center mt-[12rem] w-[800px]">Our Core Commitments</p>

        <div class="flex flex-col lg:flex-row justify-center items-center max-h-screen max-w-max mt-[15rem]">
            <div class="flex flex-col ml-[3rem] lg:flex-row justify-center items-center shadow-md px-5 py-7 gap-12">
                <div class="">
                    <img src="images/4.png" alt="" class="h-96 w-96 border-4 border-[#eddea4] border-solid rounded-md shadow-md">
                </div>
                <div class="">
                    <img src="images/5.png" alt="" class="h-96 w-96 border-4 border-[#eddea4] border-solid rounded-md shadow-md">
                </div>
                <div class="">
                    <img src="images/6.png" alt="" class="h-96 w-96 border-4 border-[#eddea4] border-solid rounded-md shadow-md">
                </div>
            </div>
        </div>


        <p class="font-rozha ml-[18rem] text-[32px] lg:text-[44px] text-black self-center mt-[18rem] lg:mt-[12rem] w-[400px]">Our Leaders</p>
        <div class="flex flex-col ml-[4rem] justify-center items-center max-h-max-content max-w-max-content mt-8 md:mt-16 lg:mt-20">
            <div class="flex flex-col">
                <img src="images/SirJerome.png" alt="" class="h-52 w-52 md:h-[[150px]] md:w-[[150px]] lg:h-80 lg:w-80 absolute border-4 border-[#eddea4] border-solid bg-[#fffcf2] rounded-lg shadow-md">
                <div class="flex flex-col bg-[#fffcf2] border-2 border-[#0d5385] shadow-md ml-[10rem] mt-2 md:mt-4 lg:mt-6 max-w-max-content">
                    <div class="ml-16 md:ml-[8rem] lg:ml-[12rem] px-3 py-1 w-96 md:w-[204px] lg:w-[820px]">
                        <p class="font-playfair font-semibold text-2xl md:text-3xl lg:text-4xl text-black self-start mb-2 md:mb-4 border-b-2 border-[#eddea4]">President Jerome Barbanida</p>
                        <p class="font-poppins text-lg md:text-xl lg:text-2xl text-black self-start mb-2 md:mb-4">As the President of a thriving Realty Company, I've embarked on a journey of leadership, innovation, and unwavering dedication, shaping the company's success while helping countless individuals find their dream homes and build their futures.</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mt-14 md:mt-20 lg:mt-[14rem] mb-8 md:mb-12 lg:mb-16">
                <img src="images/MamInin.png" alt="" class="h-52 w-52 md:h-[[150px]] md:w-[[150px]] lg:h-80 lg:w-80 absolute border-4 border-[#eddea4] border-solid bg-[#fffcf2] rounded-lg shadow-md">
                <div class="flex flex-col bg-[#fffcf2] border-2 border-[#0d5385] shadow-md ml-[10rem] mt-2 md:mt-4 lg:mt-6 max-w-max-content">
                    <div class="ml-16 md:ml-[8rem] lg:ml-[12rem] px-3 py-1 w-96 md:w-[204px] lg:w-[820px]">
                        <p class="font-playfair font-semibold text-2xl md:text-3xl lg:text-4xl text-black self-start mb-2 md:mb-4 border-b-2 border-[#eddea4]">Chairwoman Novellyn G. Quiambao</p>
                        <p class="font-poppins text-lg md:text-xl lg:text-2xl text-black self-start mb-2 md:mb-4">As the Chairwoman of our esteemed Realty Company, I've led with a commitment to excellence, fostering growth, and empowering our team to redefine industry standards while creating countless success stories for our clients and partners.</p>
                    </div>
                </div>
            </div>
        </div>

        
    </div> <!-- end div of col! -->
        <div style="margin-top:10rem;">
            @include('layouts.footer')
        </div>
    </body>
</html>
