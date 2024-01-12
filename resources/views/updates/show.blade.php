<x-app-layout>
    <div class="flex flex-col sm:px-6 lg:ml-[20rem] mt-[10rem]">
    <div class="self-end -mt-20 bg-gold w-max shadow-inner px-2 py-2 hover:shadow-md">
                <a href="{{route('updates.edit', $update->id)}}" class="text-center text-sm text-darkblue font-semibold hover:text-dirtywhite">UPDATE POST</a>
            </div>
    <div class="relative overflow-x-auto bg-dirtywhite border-2 border-darkblue shadow-md w-[1000px] h-max mt-[10px] ml-5">
                <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                                Heading
                            </th>
                            <th scope="col" class="px-6 py-3">
                                SubHeading
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Date Posted
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Featured
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{$update->titleHeading}}
                            </td>
                            <td class="px-6 py-4">
                                {{$update->titleSub}}
                            </td>
                            <td class="px-6 py-4">
                                {{$update->date}} 
                            </td>
                            <td class="px-6 py-4">
                                {{$update->status}} 
                            </td>
                            <td class="px-6 py-4">
                                {{$update->featured}}
                            </td>
                        </tr>
                    </tbody>
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                            First Paragraph
                            </th>
                            <th scope="col" class="px-6 py-3">
                       
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
                            {{$update->firstParagraph}}                    
                            </td>
                            <td class="px-6 py-4">
                                           
                            </td>
                            <td class="px-6 py-4">
                                           
                                </td>
                                <td class="px-6 py-4">
                                           
                                           </td>
                                           <td class="px-6 py-4">
                                           
                                           </td>
                        </tr>
                    </tbody>

                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                            Second Paragraph
                            </th>
                            <th scope="col" class="px-6 py-3">
                       
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
                            {{$update->secondParagraph}}                    
                            </td>
                            <td class="px-6 py-4">
                                           
                            </td>
                            <td class="px-6 py-4">
                                           
                                </td>
                                <td class="px-6 py-4">
                                           
                                           </td>
                                           <td class="px-6 py-4">
                                           
                                           </td>
                        </tr>
                    </tbody>

                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                            Third Paragraph
                            </th>
                            <th scope="col" class="px-6 py-3">
                       
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
                            {{$update->thirdParagraph}}                    
                            </td>
                            <td class="px-6 py-4">
                                           
                            </td>
                            <td class="px-6 py-4">
                                           
                                </td>
                                <td class="px-6 py-4">
                                           
                                           </td>
                                           <td class="px-6 py-4">
                                           
                                           </td>
                        </tr>
                    </tbody>
                </table>
                <!-- @foreach ($imagePaths as $path)
                    <img src="{{ asset($path) }}" alt="Image" style="width: 100px; height:100px;">
                @endforeach -->
            </div>
            <div class="ml-5 w-[1000px] h-max border-2 px-2 py-2 border-darkblue mt-10">
                <div class="grid grid-cols-2 px-3 py-4">
                    <div class="flex flex-col">
                        <p  class="text-darkblue font-poppins font-semibold text-[24px] text-start ml-2">Update Cover Photo:</p>
                        <img src="/{{$update->coverphoto}}"  alt="" style="width: 350px; height:350px; padding: 5px 5px 7px 7px;">
                    </div>
                    <div class="flex flex-col mt-14">
                        <p  class="text-darkblue font-poppins font-semibold text-[24px] text-start ml-2">Video Uploaded:</p>
                        <video width="340" height="260" controls>
                        <source src="/{{$update->vid}}" type="video/mp4">
                        Your browser does not support the video tag.
                         </video>
                    </div>
                    <div class="grid-span-2 mt-8">
                        <p class="text-darkblue font-poppins font-semibold text-[24px] text-start ml-2">Images Uploaded:</p>
                        <div class="grid grid-cols-2 w-[600px] gap-1">
                        @foreach ($imagePaths as $path)
                            <img src="{{ asset($path) }}" alt="Image">
                        @endforeach
                        </div>
                     </div>
                </div>
            </div>
    </div>


</x-app-layout>