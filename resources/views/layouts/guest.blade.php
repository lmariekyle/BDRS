<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BDRS Realty Management Services Co.</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&family=Rozha+One&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        
    </head>
    <body class="bg-dirtywhite antialiased">
        <div class="min-h-screen flex flex-row sm:justify-start pt-6 sm:pt-0 bg-[#034D78]">
            <img src="images/loginbg.jpg" alt="" style="width:900px; height:922px;">
            <div class="flex flex-col justify-center items-center ml-10 w-[900px]">
                <div class="bg-dirtywhite rounded-full px-5 py-5 border-4 border-white shadow-md">
                <a href="/">
                    <x-application-logo class="w-30 h-30 fill-current text-gray-500" />
                </a>
                </div>
                <p class="font-poppin text-[22px] text-dirtywhite mt-5">BDRS Realty Management Services Co.</p>
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-darkblue shadow-md sm:rounded-lg">
                    {{ $slot }}
                </div>
                <p class="font-poppin text-[18px] text-dirtywhite mt-5">Don't have an account?</p>
                    <a href="{{route('guest-register')}}" class="font-poppins bg-gold px-2 py-2 rounded-sm mt-2 text-[14px] text-center tracking-wide font-semibold">
                        CREATE ACCOUNT
                    </a>
            </div>
        </div>
    </body>
</html>
