<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDRS</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&family=Rozha+One&display=swap" rel="stylesheet">

        <!--Filter Scripts-->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->

    </head>
    <body class="bg-registerbg">

        <div class="flex flex-col justify-center items-center px-5 py-5">
            <div class="flex flex-col self-center mt-[5rem] ml-2 bg-[#274255a6] border-2 border-black rounded-md shadow-md px-8 py-4">
                <div class="flex flex-row">
                    <div class="flex flex-col">
                        <p class="font-poppin text-dirtywhite font-medium mt-4 text-2xl text-center underline underline-offset-8">CREATE ACCOUNT</p>
                        <form method="POST" action="{{ route('guest-register') }}" class="grid grid-cols-2 gap-4 w-max h-max px-2 py-4">
                        @csrf

                        <!-- Name -->
                        <div class="mt-4 px-4">
                            <x-input-label for="firstName" :value="__('First Name')" class="text-white" />
                            <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                        </div>

                        <div class="mt-4 px-4">
                            <x-input-label for="email" :value="__('Email')" class="text-white" />
                            <x-text-input id="email" class="block mt-1 w-full" type="Email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>


                        <div class="mt-4  px-4">
                            <x-input-label for="middleName" :value="__('Middle Name')" class="text-white"/>
                            <x-text-input id="middleName" class="block mt-1 w-full" type="text" name="middleName" :value="old('middleName')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('middleName')" class="mt-2" />
                        </div>

                        <div class="mt-4 px-4 ">
                            <x-input-label for="contactNumber" :value="__('Contact Number')" class="text-white"/>
                            <x-text-input id="contactNumber" class="block mt-1 w-full" type="text" name="contactNumber" :value="old('contactNumber')" required autocomplete="on" />
                            <x-input-error :messages="$errors->get('contactNumber')" class="mt-2" />
                        </div>

                        <div class="mt-4  px-4">
                            <x-input-label for="lastName" :value="__('Last Name')" class="text-white" />
                            <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                        </div>

                        <div class="mt-4 px-4 ">
                            <x-input-label for="dateOfBirth" :value="__('Date of Birth (MM/DD/YYYY)')" class="text-white" />
                            <x-text-input id="dateOfBirth" class="block mt-1 w-full" type="date" name="dateOfBirth" :value="old('dateOfBirth')" required autocomplete="on"  />
                            <x-input-error :messages="$errors->get('dateOfBirth')" class="mt-2" />
                        </div>

                        <!-- Password -->
                            <div class="mt-4 px-4">
                                <x-input-label for="password" :value="__('Password')" class="text-white" />
                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                        <!-- Confirm Password -->
                                <div class="mt-4 px-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white"/>

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="ml-[1rem] mt-5 mr-[7rem]">
                                    <x-primary-button class="">
                                        {{ __('Create Account') }}
                                    </x-primary-button>
                                </div>
                    
                        </form>
                    </div>
                    <div class="flex flex-col justify-center border-l-2 border-l-black h-[500px] w-[500px]">
                            <p class="font-rozha self-center text-[42px] text-dirtywhite">Let's get you set up!</p>
                            <p class="font-poppin self-center text-[14px] text-dirtywhite">Unlock a world of possibilities by creating an account with us,</p>
                            <p class="font-poppin self-center text-[14px] text-dirtywhite">Gain exclusive access to the complete property details</p>
                            <p class="font-poppin self-center text-[14px] text-dirtywhite">and seize the opportunity to effortlessly send us your inquiries!</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
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

 
