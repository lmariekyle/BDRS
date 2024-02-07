<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>


        <div class="absolute top-0  mt-[10rem] flex flex-col w-max sm:px-6 lg:ml-[20rem]">
            <div class=" bg-dirtywhite w-max self-end  px-4 py-2 ">
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

            <div class="relative bg-dirtywhite border-2 border-darkblue shadow-md w-[1000px] h-max mt-1 ml-5">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                INQUIRY SUBJECT
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CLIENT EMAIL
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CLIENT CONTACT NUMBER
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    @forelse($inquiries as $inquiry)
                        @if($inquiry->inquiryStatus == 'Replied')
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 bg-green-300">
                        @else
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        @endif
                            <td class="px-6 py-4">
                               {{$inquiry->id}}
                            </td>
                            <td class="px-6 py-4">
                            {{$inquiry->propertyName}} Property Inquiry
                            </td>
                            <td class="px-6 py-4">
                            {{$inquiry->clientEmail}}
                            </td>
                            <td class="px-6 py-4">
                            {{$inquiry->clientContact}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('inquiry.show' , $inquiry->id)}}"><i class="fa-solid fa-eye"></i></a>        
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No inquiries.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="flex flex-row justify-evenly mt-4">
                {{$inquiries->links()}}
            </div>
        </div>

</x-app-layout>
