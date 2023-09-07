<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BDRS Realty Management Services Co.') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-dirtywhite antialiased">
    
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
        </script>

    </body>
</html>
