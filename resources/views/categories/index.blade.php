<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>


        <div class="absolute top-0  mt-56 flex flex-col w-max sm:px-6 lg:ml-[20rem]">
            <!-- <div class=" bg-gold w-max self-end shadow-inner px-4 py-2 hover:shadow-md">
                <a href="{{route('updates.create')}}" class="text-center text-sm text-darkblue font-semibold hover:text-dirtywhite">CREATE UPDATE</a>
            </div> -->

            <div class="relative overflow-x-auto bg-dirtywhite border-2 border-darkblue shadow-md w-[1000px] h-max mt-4 ml-5">
                <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                            Projects
                        </th>
                        <th scope="col" class="px-6 py-3">
                             Unit Type
                        </th>
                          
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                            <a href="{{route('projects.index')}}" class="text-center text-sm text-black font-semibold hover:text-darkblue">SHOW PROJECTS</a>
                            </td>
                            <td class="px-6 py-4">
                            <a href="{{route('unit-types.index')}}" class="text-center text-sm text-black font-semibold hover:text-darkblue">SHOW UNIT TYPES</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>         
        </div>
</x-app-layout>
