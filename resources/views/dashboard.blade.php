<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    @role('User')
            <div class="flex flex-col ml-[50rem] -mt-[25rem] bg-dirtywhite border-2 border-black shadow-md rounded-md h-[500px] w-[500px] px-4 py-4">
                    <div class="flex flex-row w-full h-[50px] space-x-8 justify-center place-items-center">
                            <p class="font-poppin text-[38px]">MY PROFILE</p>
                    </div>

                    <div class="flex flex-col w-full h-[50px] space-y-4 justify-start place-items-center mt-10">
                            <div class="flex flex-col space-y-1 justify-center">
                                    <p class="font-poppin text-[24px] bg-greywhite text-center px-2 py-2 w-[400px]">{{$user->firstName}} {{$user->middleName}} {{$user->lastName}}</p>
                                    <p class="font-poppin text-[18px] text-center">Full Name</p>                
                            </div>
                            <div class="flex flex-col space-y-1 justify-center">
                                    <p class="font-poppin text-[24px] bg-greywhite text-center px-2 py-2 w-[400px]">{{$user->email}}</p>
                                    <p class="font-poppin text-[18px] text-center">Email Address</p>                
                            </div>
                            <div class="flex flex-col space-y-1 justify-center">
                                    <p class="font-poppin text-[24px] bg-greywhite text-center px-2 py-2 w-[400px]">{{$user->contactNumber}}</p>
                                    <p class="font-poppin text-[18px] text-center">Contact Number</p>                
                            </div>
                            <a href="{{route('profile.edit', $user->id)}}" class="font-poppin text-[18px] bg-gold px-2 py-2 w-max -mr-10">Update Profile</a>
                    </div>
            </div>
    @endrole

</x-app-layout>
