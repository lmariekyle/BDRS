<x-app-layout>  
<div class=" flex flex-row sm:px-6 lg:-ml-9">   
        <div class="flex flex-col items-center w-max mt-[10rem] sm:px-6 lg:ml-[30rem] bg-dirtywhite border-l-blue-950 shadow-md">
        <a href="{{ route('accounts.index')}}"><i class="absolute -ml-[23rem] mt-[2rem] fa-solid fa-arrow-left text-[20px]"></i></a>   
                <p class="font-poppin mb-2 mt-4 text-2xl underline underline-offset-8">UPDATE ACCOUNT</p>
            <form method="POST" action="{{ route('accounts.update', $user->id) }}" class="flex flex-col flex-wrap w-[800px] h-[500px] px-2 py-4">
            @method('PUT')    
            @csrf
                

                <!-- Name -->
                <div class="mt-4 px-4">
                    <x-input-label for="firstName" :value="__('First Name')" />
                    <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="$user->firstName" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                </div>

                <div class="mt-4  px-4">
                    <x-input-label for="middleName" :value="__('Middle Name')" />
                    <x-text-input id="middleName" class="block mt-1 w-full" type="text" name="middleName" :value="$user->middleName" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('middleName')" class="mt-2" />
                </div>

                <div class="mt-4  px-4">
                    <x-input-label for="lastName" :value="__('Last Name')" />
                    <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="$user->lastName" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                    <x-input-label for="dateOfBirth" :value="__('Date of Birth')" />
                    <x-text-input id="dateOfBirth" class="block mt-1 w-full" type="date" name="dateOfBirth" :value="$user->dateOfBirth" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('dateOfBirth')" class="mt-2" />
                </div>

                <div class="mt-4 px-4 ">
                    <x-input-label for="contactNumber" :value="__('Contact Number')" />
                    <x-text-input id="contactNumber" class="block mt-1 w-full" type="text" name="contactNumber" :value="$user->contactNumber" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('contactNumber')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4 px-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="Email" name="email" :value="$user->email" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                <x-input-label for="userRole" :value="__('User Role')" />
                        <select id="userRole" class="block mt-1 w-full" name="userRole" :value="$user->userRole" required autofocus>
                            @foreach($roles as $role)
                            <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mt-4 px-4 ">
                <x-input-label for="userStatus" :value="__('User Status')" />
                        <select id="userStatus" class="block mt-1 w-full" name="userStatus" :value="$user->userStatus" required autofocus>
                            <option value="0">Active</option>
                            <option value="1">Archived</option>
                        </select>
                </div>

                <div class="">
                    <x-primary-button class="flex justify-end mt-8 ml-40 px-4">
                        {{ __('Update') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
