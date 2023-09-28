<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h2>
    </x-slot>


        <div class="absolute top-0  mt-56 flex flex-col w-max sm:px-6 lg:ml-[20rem]">
            <div class=" bg-gold w-max self-end shadow-inner px-4 py-2 hover:shadow-md">
                <a href="{{ route('properties.create') }}" class="text-center text-sm text-darkblue font-semibold hover:text-dirtywhite">ADD PROPERTY</a>
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
                                Property Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Property Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Property Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Property Location
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($properties as $property)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{$property->type}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->status}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->address}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('properties.show', 
                                    $property->id)}}" class="mr-5"><i class="fa-solid fa-eye"></i> </a>          
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No properties found.</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
            </div>
            <div class="flex flex-row justify-evenly mt-4">
                {{$properties->links()}}
            </div>                       
        </div>

</x-app-layout>
