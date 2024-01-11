<x-app-layout>

        <div class="flex flex-col items-center self-center w-max sm:px-6 lg:ml-[30rem] bg-dirtywhite border-l-blue-950 shadow-md h-max mt-[14rem]">
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
                    <x-input-label for="dateOfBirth" :value="__('Date of Birth (MM/DD/YYYY)')" />
                    <x-text-input id="dateOfBirth" class="block mt-1 w-full" type="date" name="dateOfBirth" :value="old('dateOfBirth')" required autocomplete="on"  />
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
                    <x-primary-button class="flex justify-end mt-8 ml-[7rem] px-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
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

</x-app-layout>
