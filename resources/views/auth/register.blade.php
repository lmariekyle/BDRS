<x-app-layout>
<div class=" flex flex-row sm:px-6 lg:-ml-9">
        <div class="bg-gold w-[315px] h-[1024px] flex justify-start flex-col py-5 px-2">
            <div class="self-center mr-5 bg-dirtywhite rounded-full w-[140px] h-[134px] sm:-my-px sm:ml-10 sm:flex px-14">
                   <!-- <img src="images/logo.png" alt=""  style="width: 100px; height:100px;"> -->
            </div>
            <div class="-mt-[112px] sm:ml-[112px] lg:ml-[112px]">
                <img src="images/logo.png" alt=""  style="width: 100px; height:100px;">
            </div>
            <div class="mt-20 self-center">
                <p class="font-poppins text-2xl underline underline-offset-8">Isabella Rodriguez</p>
                @role('Admin')
                <p class="font-poppins text-2xl text-center text-darkblue">ADMIN</p>
                @endrole
            </div>

            <div class="mt-24 self-center bg-gold border-y-2 border-dirtywhite shadow-md px-4 py-2 hover:shadow-inner">
                <a href="" class="font-poppins text-2xl">User Accounts</a>
            </div>

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
        </div>

        <div class="flex flex-col items-center w-max sm:px-6 lg:ml-[15rem] bg-dirtywhite border-l-blue-950 shadow-md h-max mt-[15rem]">
                <p class="font-poppins mb-4 text-2xl underline underline-offset-8">Add Account</p>
            <form method="POST" action="{{ route('register') }}" class="flex flex-col flex-wrap w-[800px] h-[300px]">
                @csrf

                <!-- Name -->
                <div class="mt-4 px-4">
                    <x-input-label for="firstName" :value="__('First Name')" />
                    <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                </div>

                <div class="mt-4  px-4">
                    <x-input-label for="middleName" :value="__('Middle Name')" />
                    <x-text-input id="middleName" class="block mt-1 w-full" type="text" name="middleName" :value="old('middleName')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('middleName')" class="mt-2" />
                </div>

                <div class="mt-4  px-4">
                    <x-input-label for="lastName" :value="__('Last Name')" />
                    <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                    <x-input-label for="dateOfBirth" :value="__('Date of Birth')" />
                    <x-text-input id="dateOfBirth" class="block mt-1 w-full" type="date" name="dateOfBirth" :value="old('dateOfBirth')" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('dateOfBirth')" class="mt-2" />
                </div>

                <div class="mt-4 px-4 ">
                    <x-input-label for="contactNumber" :value="__('Contact Number')" />
                    <x-text-input id="contactNumber" class="block mt-1 w-full" type="text" name="contactNumber" :value="old('contactNumber')" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('contactNumber')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4 px-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="Email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                <x-input-label for="userRole" :value="__('User Role')" />
                        <select id="userRole" class="block mt-1 w-full" name="userRole" :value="old('userRole')" required autofocus>
                            @foreach($roles as $role)
                            <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                </div>

        <!-- Password -->
            <div class="">
                <!-- <x-input-label for="password" :value="__('Password')" /> -->
                <x-text-input id="password" class="hidden"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        <!-- Confirm Password -->
                <div class="">
                    <!-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->

                    <x-text-input id="password_confirmation" class="hidden"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="generate-password">
                    <x-primary-button class="flex justify-end mt-2 ml-40 px-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
