<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BDRS Realty Management Services Co</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&family=Rozha+One&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-dirtywhite antialiased">
    
    <div class="flex flex-row sm:px-6 lg:-ml-9">
        <div class="bg-gold w-[315px] h-[1024px] flex justify-start flex-col py-5 px-2">
            <div class="self-center mr-5 bg-dirtywhite rounded-full w-[140px] h-[134px] sm:-my-px sm:ml-10 sm:flex px-14">
                   <!-- <img src="images/logo.png" alt=""  style="width: 100px; height:100px;"> -->
            </div>
            <div class="-mt-[112px] sm:ml-[112px] lg:ml-[112px]">
                <img src="/images/logo.png" alt=""  style="width: 100px; height:100px;">
            </div>
            
            <div class="mt-20 self-center">
            @auth
                <p class="font-poppins text-2xl text-center underline underline-offset-8"> {{Auth::user()->firstName}} {{Auth::user()->middleName}} {{Auth::user()->lastName}}</p>
            @endauth

                @role('Admin')
                <p class="font-poppins mt-4 text-2xl text-center text-darkblue">ADMIN</p>
                @endrole

                @role('Customer Service')
                <p class="font-poppins mt-4 text-2xl text-center text-darkblue">CUSTOMER SERVICE</p>
                @endrole

                @role('Marketing')
                <p class="font-poppins mt-4 text-2xl text-center text-darkblue">MARKETING</p>
                @endrole
            </div>

            <div class="mt-24 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
            <i class="fa-solid fa-house px-2 text-dirtywhite text-[18px]"></i>
                <a href="/" class="font-poppins text-[18px] font-medium ">HOME</a>
            </div>

            @role('Admin')
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{ route('accounts.index') }}" class="font-poppins text-[18px] font-medium ">USERS</a>
            </div>
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-house px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('properties.index')}}" class="font-poppins text-[18px] font-medium ">PROPERTIES</a>
            </div>
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('inquiry.index')}}" class="font-poppins text-[18px] font-medium ">INQUIRIES</a>
            </div>
            @endrole

            @role('Marketing')
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('properties.index')}}" class="font-poppins text-[18px] font-medium ">PROPERTIES</a>
            </div>

            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('updates.index')}}" class="font-poppins text-[18px] font-medium ">UPDATES</a>
            </div>
            @endrole

            @role('Customer Service')
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('inquiry.index')}}" class="font-poppins text-[18px] font-medium ">INQUIRIES</a>
            </div>
            @endrole

            <div class="static mt-24 self-center bg-gold border-y-2 border-dirtywhite shadow-md px-8 py-2 hover:shadow-inner">
                <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('LOGOUT') }}
                        </a>
                </form>
            </div>
            <!-- Page Heading -->
            <!-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        
        <script>

        $(document).ready(function(){
            
            function generatePassword(){
                let password = "bdrs7777";
                return password;
            }

            // sets password input fields
            $('.generate-password').on('click',function(){
                let password = generatePassword();

                $('#password').val(password);
                $('#password_confirmation').val(password);
            });

        }); 

        $("document").ready(function()
        {
            setTimeout(function(){
                $("div.alert").remove();
            }, 3000);
        });

        document.addEventListener("DOMContentLoaded", function () {
        var currentDate = new Date();
        var maxYear = currentDate.getFullYear() - 18; // Maximum year for 18 years old and above

        var dateOfBirthInput = document.getElementById("dateOfBirth");
        dateOfBirthInput.setAttribute("max", formatDate(maxYear, 12, 31)); // Set maximum date to the end of the calculated maximum year

        // Format the date as YYYY-MM-DD
        function formatDate(month, day, year) {
            month = String(month).padStart(2, "0");
            day = String(day).padStart(2, "0");
            return month + "-" + day + "-" + year;
        }
    });
        </script>

    </body>
</html>
