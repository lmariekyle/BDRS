<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDRS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oooh+Baby&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!--Filter Scripts-->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title font-poppin text-[18px]" id="LoginModal">NOTICE</h5>

                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"></i></button>
                    </div>
                <div class="modal-body flex flex-col"> 
                
                    <div class="flex flex-col justify-center self-center w-max h-max ml-2 px-4 py-4">
                            <p class="font-poppin text-[18px] ml-3">To view the details of this property,</p>
                            <p class="font-poppin text-[18px]">we would like to require you to sign up</p>
                            <a href="{{route('guest-register')}}" class="mt-3 self-center px-4 py-1 font-poppin text-[16px] border-2 border-black">CREATE ACCOUNT</a>
                            <p class="font-poppin text-[18px] mt-4 self-center">Already have an account?</p>
                    </div>
            
                    <div>
                        <p class="font-poppin text-[18px] self-start bg-darkblue text-dirtywhite py-2 w-full px-4 mb-3">LOGIN</p>
                            <form method="POST" action="{{ route('loginGuest') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" class="text-black" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" class="text-black"/>

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                        <span class="ml-2 text-sm text-black">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ml-3">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
