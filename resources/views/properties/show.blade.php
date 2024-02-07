<x-app-layout>
    <div class="flex flex-col sm:px-6 lg:ml-[20rem] mt-[15rem] w-[1065px]">
    <div class="flex flex-row self-start justify-between w-max ml-4 -mt-20 gap-8">
                <a href="{{ route('properties.index')}}"><i class="fa-solid fa-arrow-left text-[20px]"></i></a> 
                <a href="{{ route('properties.edit', $property->id) }}" class="text-center text-sm text-darkblue font-semibold hover:text-dirtywhite bg-gold shadow-inner px-4 py-2 mb-4 hover:shadow-md">UPDATE PROPERTY</a>
    </div>
    <div class="relative overflow-x-auto bg-dirtywhite border-2 border-darkblue shadow-md w-[1000px] h-max mt-[10px] ml-5">
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
                                Size
                            </th>
                            <th scope="col" class="px-6 py-3">
                            Full Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Property Availability
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
                            {{$property->sizes}} Sqm
                            </td>
                            <td class="px-6 py-4">
                            {{$property->address}}                    
                                {{$property->state}}
                                {{$property->zip}}
                            </td>
                            <td class="px-6 py-4">
                            {{$property->availability}}
                            </td>
                        </tr>
                    </tbody>
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                            Unit Type
                            </th>            
                            <th scope="col" class="px-6 py-3">
                            Furnish
                            </th>
                            <th scope="col" class="px-6 py-3">
                           
                            </th>
                            <th scope="col" class="px-6 py-3">
                 
                            </th>
                            <th scope="col" class="px-6 py-3">
                            
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                            {{$property->unitType}}  
                            </td>
                            <td class="px-6 py-4">
                            {{$property->furnish}}
                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">
                        
                            </td>
                            <td class="px-6 py-4">
                              
                              </td>
                        </tr>
                    </tbody>
                    <thead class="bg-gold border-2 border-dirtywhite-600 shadow-inner text-md text-darkblue uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                     
                            </th>
                            <th scope="col" class="px-6 py-3">
                          
                            </th>            
                            <th scope="col" class="px-6 py-3">
                            Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                        
                            </th>
                            <th scope="col" class="px-6 py-3">
                 
                            </th>
                        </tr>
                    </thead>
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                                Property Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Unit Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bed Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Furnish Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Location Description
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{$property->description}}
                            </td>
                            <td class="px-6 py-4">
                                {{$property->unitdesc}}
                            </td>
                            <td class="px-6 py-4">
                            {{$property->beddesc}}
                            </td>
                            <td class="px-6 py-4">
                            {{$property->furnishdesc}}                    
                            </td>
                            <td class="px-6 py-4">
                            {{$property->locationdesc}}
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
                <!-- @foreach ($imagePaths as $path)
                    <img src="{{ asset($path) }}" alt="Image" style="width: 100px; height:100px;">
                @endforeach -->
            </div>
            <div class="ml-5 w-[1400px] h-max py-2 mt-10 bg-dirtywhite">
                <div class="flex flex-col">
                    <div class="flex flex-row">
                    <div class="flex flex-col w-max">
                        <p  class="text-darkblue font-poppins font-semibold text-[24px] text-start ml-2">Property Cover Photo:</p>
                        <img src="/{{$property->coverphoto}}"  alt="" style="width: 350px; height:350px; margin-bottom:20px; padding: 5px 5px 7px 7px;">
                    </div>
                    <div class="ml-14 flex flex-col">
                        <p  class="text-darkblue font-poppins font-semibold text-[24px] text-start ml-2">Property Price Photo:</p>
                        <img src="/{{$property->priceimg}}"  alt="" style="width: 350px; height:350px; margin-bottom:20px; padding: 5px 5px 7px 7px;">
                    </div>
                    </div>
                     <div class="flex flex-col mt-14">
                        <p  class="text-darkblue font-poppins font-semibold text-[24px] text-start ml-2">Video Uploaded:</p>
                        <video width="340" height="260" controls>
                        <source src="/{{$property->vid}}" type="video/mp4">
                        Your browser does not support the video tag.
                         </video>
                    </div>
                    <div class="flex flex-col mt-14">
                        <p class="text-darkblue font-poppins font-semibold text-[24px] text-start ml-2">Amenities Uploaded:</p>
                        <div class="flex flex-row">
                        @foreach ($imagePaths as $path)
                            <img src="{{ asset($path) }}" alt="Image" style="width: 250px; height:250px; margin-bottom:20px; padding: 5px 5px 7px 7px;">
                        @endforeach
                        </div>
                     </div>
                </div>
            </div>
    </div>


</x-app-layout>