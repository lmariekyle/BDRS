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
        <!-- navigation -->
        <div class="flex flex-row mt-2 absolute mr-10 right-0">
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
        </div>

        <!-- start of  content -->
        <div class="flex flex-col justify-center place-items-center mt-10 w-full h-max">
            <div class="flex flex-col mb-[5rem]">
                <p class="font-rozha text-[62px] text-black self-center mt-[10rem]">Privacy Policy</p>
                <p class="font-poppins text-[32px] text-black self-center -mt-2 font-semibold ml-4">BDRS Realty Management Services Co.</p>
            </div>

            <div class="flex flex-col mt-20 w-[800px] ">
                <p class="font-poppins text-[32px] text-black self-center mt-2 font-semibold border-b-2 border-darkblue mb-8">INTRODUCTION</p>
                <div>
                <p class="font-poppins text-[16px] text-black self-center mt-2 font-semibold">Welcome to BDRS Realty Management Services, Co.
                    <br>BDRS Realty Management Services, Co. (“us”, “we”, or “our”) operates bdrs-realty.com (hereinafter referred to as “Service”).</p>
                </div>
                <p class="font-poppins text-[16px] text-black self-center mt-2 font-semibold">Our Privacy Policy governs your visit to bdrs-realty.com, and explains how we collect, safeguard and disclose information that results from your use of our Service.</p>
                <p class="font-poppins text-[16px] text-black self-center mt-2 font-semibold">We use your data to provide and improve Service. By using Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.</p>
                <p class="font-poppins text-[16px] text-black self-center mt-2 font-semibold">Our Terms and Conditions (“Terms”) govern all use of our Service and together with the Privacy Policy constitutes your agreement with us (“agreement”). </p>
            </div>

                    <table class="table-auto ml-9 w-[900px]">
                    <p class="font-poppins text-[32px] text-black self-center mt-10 font-semibold border-b-2 border-darkblue mb-8">DEFINITIONS</p>
                    <tbody>
                    <tr class="">
                        <th scope="row" class=" px-5 font-poppins text-[16px] text-darkblue self-center mt-2 font-bold">SERVICES</th>
                         <td class="px-4 py-4font-poppins text-[16px] text-black self-center mt-2 ml-2 font-semibold">means the bdrs-realty.com website operated by BDRS Realty Management Services, Co..</td>
                    </tr>

                    <tr class="">
                        <th scope="row" class="px-5 font-poppins text-[16px] text-darkblue self-center mt-2 font-bold">PERSONAL DATA</th>
                         <td class="px-4 py-4 font-poppins text-[16px] text-black self-center mt-2 ml-2 font-semibold">means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</td>
                    </tr>

                    <tr class="">
                        <th scope="row" class="px-5 font-poppins text-[16px] text-darkblue self-center mt-2 font-bold">USAGE DATA</th>
                         <td class="px-4 py-4 font-poppins text-[16px] text-black self-center mt-2 ml-2 font-semibold">is data collected automatically either generated by the use of Service or from Service infrastructure itself (for example, the duration of a page visit).</td>
                    </tr>

                    <tr class="">
                        <th scope="row" class="px-5 font-poppins text-[16px] text-darkblue self-center mt-2 font-bold">COOKIES</th>
                         <td class="px-4 py-4 font-poppins text-[16px] text-black self-center mt-2 ml-2 font-semibold">are small files stored on your device (computer or mobile device).</td>
                    </tr>


                    
                    <tr class="">
                        <th scope="row" class="px-5 font-poppins text-[16px] text-darkblue self-center mt-2 font-bold">DATA CONTROLLER</th>
                         <td class="px-4 py-4 font-poppins text-[16px] text-black self-center mt-2 ml-2 font-semibold">means a natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed. For the purpose of this Privacy Policy, we are a Data Controller of your data.</td>
                    </tr>

                    <tr class="">
                        <th scope="row" class="px-5 font-poppins text-[16px] text-darkblue self-center mt-2 font-bold">DATA PROCESSORS (OR SERVICE PROVIDERS)</th>
                         <td class="px-4  py-4 font-poppins text-[16px] text-black self-center mt-2 ml-2 font-semibold">means any natural or legal person who processes the data on behalf of the Data Controller. We may use the services of various Service Providers in order to process your data more effectively</td>
                    </tr>

                    <tr class="">
                        <th scope="row" class="px-5 font-poppins text-[16px] text-darkblue self-center mt-2 font-bold">DATA SUBJECT</th>
                         <td class="px-4 py-4 font-poppins text-[16px] text-black self-center mt-2 ml-2 font-semibold">is any living individual who is the subject of Personal Data.</td>
                    </tr>

                    <tr class="">
                        <th scope="row" class="px-5 font-poppins text-[16px] text-darkblue self-center mt-2 font-bold">THE USER</th>
                         <td class="px-4 py-4 font-poppins text-[16px] text-black self-center mt-2 ml-2 font-semibold">is the individual using our Service. The User corresponds to the Data Subject,<br> who is the subject of Personal Data.</td>
                    </tr>
                </tbody>               
                </table>
            </div>
            </div>

           

        @include('layouts.footer')
        
    </div> <!-- end div of col! -->

    </body>
</html>
