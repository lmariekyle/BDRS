<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    @role('User')
            <div class="flex flex-col ml-[40rem] mt-[7rem] bg-dirtywhite border-2 border-black shadow-md rounded-md h-[500px] w-[500px] px-4 py-4">
                    <div class="flex flex-row w-full h-[50px] space-x-8 justify-center place-items-center">
                            <p class="font-poppin text-[38px]">MY PROFILE</p>
                    </div>

                    <div class="flex flex-col w-full h-[50px] space-y-4 justify-start place-items-center mt-2">
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
                            <a href="{{route('profile.edit', $user->id)}}" class="font-poppin text-[18px] bg-gold px-2 py-2 w-max mt-4" style="text-decoration: none; color:black;">Update Profile</a>
                    </div>
            </div>
    @endrole
    
    @hasanyrole('Customer Service|Marketing|Admin|Super Admin')
        @role('Customer Service')
            <div style="display: flex; flex-direction: column;margin-left: 25rem; margin-top: 10rem; height: 600px; width: max-content;">
        @endrole
        @role('Marketing')
            <div style="display: flex; flex-direction: column;margin-left: 25rem; margin-top: 10rem; height: 600px; width: max-content;">
        @endrole
        @role('Admin')
            <div style="display: flex; flex-direction: column;margin-left: 25rem; margin-top: 10rem; height: 600px; width: max-content;">
        @endrole
        @role('Super Admin')
            <div style="display: flex; flex-direction: column;margin-left: 25rem; margin-top: 10rem; height: 600px; width: max-content;">
        @endrole
            <p style="font-family: Poppins; font-size: 30px; margin-left:10px; margin-top:8px; margin-bottom:10px; font-weight:bold;">Welcome back , {{$user->firstName}}!</p>
            <div class="datetime">
                <div class="time" style="font-size: 32px;"></div>
                <div class="date" style="font-size: 24px; margin-top:4px;"></div>
            </div>
            <div style="display: flex; justify-content: center; height: max-content; height: 100px; width: max-content;">
                <div style="display: flex; flex-direction: row; justify-content: center; margin-top:20px;height: max-content; width: max-content;">
                    <div style="background-color: #edede9; width: max-content; height: max-content; margin-left: 10px; margin-right: 10px; border: 2px solid black; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.25); border-radius: 8px; padding:15px 35px 15px 35px;">
                        <div style="display:flex; flex-direction:column;">
                            <i class="fa-solid fa-at" style="text-align:center;font-size: 30px;"></i>
                            <p style="font-family: Poppins; font-size: 22px; color: black; text-align:center; margin-top:10px; font-weight:bold; text-decoration: underline; text-underline-offset: 0.5rem;">NUMBER OF INQUIRIES</p>
                            <div style="display:flex; flex-direction:row; justify-content:center; margin-top:10px;">
                                <p style="font-family: Poppins; font-size: 62px; font-weight:bold;">{{$inquiries}}</p>
                                <p style="font-family: Poppins; font-size: 30px; margin-left:10px; margin-top:25px; font-weight:bold;">INQUIRIES</p>
                            </div>
                        </div>
                    </div>

                    <div style="background-color: #edede9; width: max-content; height: max-content; margin-left: 30px; margin-right: 10px; border: 2px solid black; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.25); border-radius: 8px; padding:15px 15px 15px 15px;">
                        <div style="display:flex; flex-direction:column;">
                            <i class="fa-solid fa-building" style="text-align:center;font-size: 30px;"></i>
                            <p style="font-family: Poppins; font-size: 22px; color: black; text-align:center; margin-top:10px; font-weight:bold; text-decoration: underline; text-underline-offset: 0.5rem;">PROPERTIES POSTED</p>
                            <div style="display:flex; flex-direction:row; justify-content:center; margin-top:10px;">
                                <p style="font-family: Poppins; font-size: 62px; font-weight:bold;">{{$properties}}</p>
                                <p style="font-family: Poppins; font-size: 30px; margin-left:10px; margin-top:25px; font-weight:bold;">PROPERTIES</p>
                            </div>
                        </div>
                    </div>

                    <div style="background-color: #edede9; width: max-content; height: max-content; margin-left: 30px; margin-right: 10px; border: 2px solid black; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.25); border-radius: 8px; padding:15px 15px 15px 15px;">
                        <div style="display:flex; flex-direction:column;">
                            <i class="fa-solid fa-users" style="text-align:center;font-size: 30px;"></i>
                            <p style="font-family: Poppins; font-size: 22px; color: black; text-align:center; margin-top:10px; font-weight:bold; text-decoration: underline; text-underline-offset: 0.5rem;">TOTAL USERS</p>
                            <div style="display:flex; flex-direction:row; justify-content:center; margin-top:10px;">
                                <p style="font-family: Poppins; font-size: 62px; font-weight:bold;">{{$users}}</p>
                                <p style="font-family: Poppins; font-size: 30px; margin-left:10px; margin-top:25px; font-weight:bold;">USERS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endhasanyrole

</x-app-layout>
