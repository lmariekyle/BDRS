<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BDRS Realty Management Services Co</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
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

        <style>
        .file {
            width: 7rem; 
            height: 42px;
            overflow: hidden;
            background-color: #001f3f;
            color: #FDF5E6;
            font-size: 14px;
            font-family: 'Poppins', sans-serif; 
            cursor: pointer;
            }

            .datetime {
            font-size: 16px;
            padding: 10px;
            color: #ffffff;
            background: #fffcf2;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.25);
            border-radius: 4px;
            border-left: 10px #eddea4 solid;
            margin-top: 10px;
            margin-left:10px;
            margin-bottom:15px;
            width: 400px;
            font-weight: 500;
            font-family: "Inter", sans-serif;
            }

            .time {
            font-size: 3em;
            color: black;
            }

            .date {
            margin-top: -12px;
            font-size: 1.75em;
            color: black;
            }
        </style>

    </head>
    <body class="bg-dirtywhite antialiased">

    <div class="flex flex-row">
        <div class="bg-gold w-[315px] h-full flex justify-start flex-col py-5 px-2 -ml-[2rem] z-10">
            <div class="self-center mr-5 bg-dirtywhite rounded-full w-[140px] h-[134px] sm:-my-px sm:ml-10 sm:flex px-14">
                   <!-- <img src="images/logo.png" alt=""  style="width: 100px; height:100px;"> -->
            </div>
            <div class="-mt-[7rem] sm:ml-[112px] lg:ml-[112px]">
                <img src="/images/logo.png" alt=""  style="width: 100px; height:100px;">
            </div>
<!--             
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

                    @role('User')
                    <p class="font-poppins mt-4 text-2xl text-center text-darkblue">Welcome, {{Auth::user()->firstName}}!</p>
                    @endrole
            </div> -->

            <div class="mt-24 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-house px-2 text-dirtywhite text-[18px]"></i>
                <a href="/" class="font-poppins text-[18px] font-medium text-black" style="text-decoration:none;">HOME</a>
            </div>

            @role('User')
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
            </div>
            @endrole

            @role('Admin')
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{ route('accounts.index') }}" class="font-poppins text-[18px] font-medium text-black" style="text-decoration:none;">USERS</a>
            </div>
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-house px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('properties.index')}}" class="font-poppins text-[18px] font-medium text-black" style="text-decoration:none;">PROPERTIES</a>
            </div>
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('inquiry.index')}}" class="font-poppins text-[18px] font-medium text-black" style="text-decoration:none;">INQUIRIES</a>
            </div>
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('updates.index')}}" class="font-poppins text-[18px] font-medium text-black" style="text-decoration:none;">UPDATES</a>
            </div>
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('categories.index')}}" class="font-poppins text-[18px] font-medium text-black" style="text-decoration:none;">CATEGORIES</a>
            </div>
            @endrole

            @role('Marketing')
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('properties.index')}}" class="font-poppins text-[18px] font-medium text-black" style="text-decoration:none;">PROPERTIES</a>
            </div>

            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('updates.index')}}" class="font-poppins text-[18px] font-medium text-black" style="text-decoration:none;">UPDATES</a>
            </div>
            @endrole

            @role('Customer Service')
            <div class="mt-4 ml-[6px] w-full bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <i class="fa-solid fa-users px-2 text-dirtywhite text-[18px]"></i>
                <a href="{{route('inquiry.index')}}" class="font-poppins text-[18px] font-medium text-black" style="text-decoration:none;">INQUIRIES</a>
            </div>
            @endrole

            <div class="static mt-24 self-center bg-gold border-y-2 border-dirtywhite shadow-md px-8 py-2 hover:shadow-inner">
                <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a style="text-decoration:none; color:black;" href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('LOGOUT') }}
                            
                        </a>
                </form>
            </div>
        </div>
        <div class="absolute">
            {{$slot}}
        </div>
    </div>

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
        const timeElement = document.querySelector(".time");
        const dateElement = document.querySelector(".date");

        /**
         * @param {Date} date
         */
        function formatTime(date) {
        const hours12 = date.getHours() % 12 || 12;
        const minutes = date.getMinutes();
        const isAm = date.getHours() < 12;

        return `${hours12.toString().padStart(2, "0")}:${minutes
            .toString()
            .padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
        }

        /**
         * @param {Date} date
         */
        function formatDate(date) {
        const DAYS = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
        ];
        const MONTHS = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];

        return `${DAYS[date.getDay()]}, ${
            MONTHS[date.getMonth()]
        } ${date.getDate()} ${date.getFullYear()}`;
        }

        setInterval(() => {
        const now = new Date();

        timeElement.textContent = formatTime(now);
        dateElement.textContent = formatDate(now);
        }, 200);
        </script>

    </body>
</html>
