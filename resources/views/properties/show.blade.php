<x-app-layout>
    @php

    @endphp
    <div class="flex flex-col sm:px-6 lg:ml-[20rem] -mt-[30rem]">
    <div class="relative overflow-x-auto bg-dirtywhite border-2 border-darkblue shadow-md w-[1400px] h-max mt-4 ml-5">
                <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Size
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Measurement
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{$property->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->type}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->price}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->size}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->measurement}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->address}}                    
                                {{$property->state}}
                                {{$property->zip}}
                            </td>

                        </tr>
                    </tbody>
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                                Bed
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Provision
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Property Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>            
                            <th scope="col" class="px-6 py-3">
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                                {{$property->bed}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->provision}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->approve}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->status}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="/" class=""><i class="fa-solid fa-pen"></i></a>        
                            </td>
                        </tr>
                    </tbody>
                </table>
                @foreach ($imagePaths as $path)
                    <img src="{{ asset($path) }}" alt="Image" style="width: 100px; height:100px;">
                @endforeach
            </div>
    </div>


</x-app-layout>