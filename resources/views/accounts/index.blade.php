<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>


        <div class="absolute top-0  mt-56 flex flex-col w-max sm:px-6 lg:ml-[20rem]">
            <div class=" bg-gold w-max self-end shadow-inner px-4 py-2 hover:shadow-md">
                <a href="{{ route('register') }}" class="text-center text-sm text-darkblue font-semibold hover:text-dirtywhite">CREATE ACCOUNT</a>
            </div>

            <div class="relative overflow-x-auto bg-dirtywhite border-2 border-darkblue shadow-md w-[1000px] h-max mt-4 ml-5">
                <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                                ID
                            </th>
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

                        @forelse ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                                {{$user->id}}
                            </td>
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
                                <a href="{{ route('accounts.edit', $user->id) }}"><i class="fa-solid fa-user-pen"></i></a>        
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No users found.</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            <div class="flex flex-row justify-evenly mt-4">
                {{$users->links()}}
            </div>
        </div>

</x-app-layout>
