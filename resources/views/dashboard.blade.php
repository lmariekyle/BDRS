<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class=" flex flex-row sm:px-6 lg:-ml-9">
        <div class="bg-gold w-[315px] h-[1024px] flex justify-start flex-col py-5 px-2">
            <div class="self-center mr-5 bg-dirtywhite rounded-full w-[140px] h-[134px] sm:-my-px sm:ml-10 sm:flex px-14">
                   <!-- <img src="images/logo.png" alt=""  style="width: 100px; height:100px;"> -->
            </div>
            <div class="-mt-[112px] sm:ml-[112px] lg:ml-[112px]">
                <img src="images/logo.png" alt=""  style="width: 100px; height:100px;">
            </div>
            
            <div class="mt-20 self-center">
            @auth
                <p class="font-poppins text-2xl underline underline-offset-8"> {{Auth::user()->firstName}} {{Auth::user()->middleName}} {{Auth::user()->lastName}}</p>
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

                @hasallroles('Customer Service|Guest')
                <p class="font-poppins mt-4 text-2xl text-center text-darkblue">Guest</p>
                @endhasallroles
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
        <div class="flex flex-col mt-20 w-max sm:px-6 lg:ml-9">
            <div class=" bg-gold w-max self-end shadow-inner px-4 py-2 hover:shadow-md">
                <a href="{{ route('register') }}" class="text-center text-sm text-darkblue font-semibold hover:text-dirtywhite">CREATE ACCOUNT</a>
            </div>
            <!-- <div class=" bg-dirtywhite w-full h-96 mt-4 border-2 border-darkblue shadow-md relative overflow-x-auto"> -->
                <!-- <div class="bg-darkblue w-full h-14 border-2 border-dirtywhite-600 shadow-inner flex justify-between items-center px-4">
                    <p class="font-poppins text-base text-dirtywhite font-semibold">ID</p>
                    <p class="font-poppins text-base text-dirtywhite font-semibold">NAME</p>
                    <p class="font-poppins text-base text-dirtywhite font-semibold">EMAIL</p>
                    <p class="font-poppins text-base text-dirtywhite font-semibold">CONTACT NUMBER</p>
                    <p class="font-poppins text-base text-dirtywhite font-semibold">ACTION</p>
                </div> -->  
            <!-- </div> -->

            <div class="relative overflow-x-auto bg-dirtywhite border-2 border-darkblue shadow-md w-[1400px] h-max mt-4 ml-5">
                <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                EMAIL
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CONTACT NUMBER
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <!-- <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{$user->id}}
                            </th> -->
                            <td class="px-6 py-4">
                                {{$user->firstName}} {{$user->middleName}} {{$user->lastName}}
                            </td>
                            <td class="px-6 py-4">
                                {{$user->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$user->contactNumber}}
                            </td>
                            <td class="px-6 py-4">
                                UPDATE | ARCHIVE
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
