<x-app-layout>
    <div class="flex flex-col sm:px-6 lg:ml-[20rem] -mt-[30rem]">
    <div class="relative overflow-x-auto bg-dirtywhite border-2 border-darkblue shadow-md w-[1400px] h-max mt-2 ml-5">
                <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                                Client Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Property Inquired
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Client Contact
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Client Email Address
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                            {{$inquiry->clientName}}
                            </td>
                            <td class="px-6 py-4">
                            {{$inquiry->propertyName}}
                            </td>
                            <td class="px-6 py-4">
                            {{$inquiry->clientContact}}
                            </td>
                            <td class="px-6 py-4">
                            {{$inquiry->clientEmail}}
                            </td>
                        </tr>
                    </tbody>
                   
                </table>
            </div>
            <div class="relative overflow-x-auto bg-dirtywhite border-2 border-darkblue shadow-md w-[1400px] h-max mt-2 ml-5">
                <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Inquiry Message
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Inquiry Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                            {{$inquiry->clientMessage}}
                            </td>
                            <td class="px-6 py-4">
                            <select id="inquiryStatus" class="block mt-1 w-full" name="inquiryStatus" :value="$inquiry->inquiryStatus" required autofocus>
                                <option value="Unread">Unread</option>
                                <option value="Read">Read</option>
                            </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="absolute flex flex-row w-full h-[500px] mt-[24rem] ml-5">
                    <form method="POST" action="">
                        @method('PUT')    
                        @csrf
                        <div class="flex flex-col w-max h-max bg-[#f6f6f6] border-2 border-black -mt-10 px-8 py-8">
                            <p class="px-8 py-2 font-poppin text-[18px] font-medium text-black -ml-8">CLIENT NAME:</p>
                            <input type="text" name="clientName" id="clientName" class="-mt-2 w-[450px] h-[40px]" required value="{{$inquiry->clientName}}">

                            <p class="px-8 py-2 font-poppin text-[18px] font-medium text-black -ml-8" >CONTACT NUMBER:</p>
                            <input type="text" name="clientContact" id="clientContact" class="-mt-2 h-[40px]" required value="{{$inquiry->clientContact}}">

                            <p class="px-8 py-2 font-poppin text-[18px] font-medium text-black -ml-8">EMAIL ADDRESS:</p>
                            <input type="text" name="clientEmail" id="clientEmail" class="-mt-2 h-[40px]" required value="{{$inquiry->clientEmail}}">
                
                            <p class="px-8 py-2 font-poppin text-[18px] font-medium text-black -ml-8">MESSAGE:</p>
                            <input type="text" name="clientMessage" id="clientMessage" class="-mt-2 h-[100px]" required>
                            <input type="text" name="propertyName" id="propertyName" class="hidden -mt-2 h-[100px]" value="{{$inquiry->propertyName}}">

                            <button type="submit" class="px-8 mt-8 py-2 font-poppin text-[22px] font-medium text-black border-2 border-black">Email to Client</button>
                    </div>
            </div>
        </form>
    </div>
            
    </div>


</x-app-layout>