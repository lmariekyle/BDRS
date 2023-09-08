<x-app-layout>
<div class=" flex flex-row sm:px-6 lg:-ml-9">
        <div class="flex flex-col items-center w-max -mt-[27rem] sm:px-6 lg:ml-[30rem] bg-dirtywhite border-l-blue-950 shadow-md">
                <p class="font-poppins mb-4 text-2xl underline underline-offset-8">Create Property</p>
            <form method="POST" action="{{route('properties.store') }}" class="flex flex-col flex-wrap w-max h-[430px]" enctype="multipart/form-data">  
                @csrf
                <!-- Name -->
                <div class="mt-4 px-4">
                    <x-input-label for="name" :value="__('Property Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                <x-input-label for="type" :value="__('Property Type')" />
                        <select id="type" class="block mt-1 w-full" name="type" :value="old('type')" required autofocus>
                            <option value="0">Condominium</option>
                            <option value="1">Apartment</option>
                        </select>
                </div>

                <div class="mt-4  px-4">
                    <x-input-label for="price" :value="__('Price')" />
                    <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                    <x-input-label for="sizes" :value="__('Size')" />
                    <x-text-input id="sizes" class="block mt-1 w-full" type="text" name="sizes" :value="old('sizes')" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('dateOfBirth')" class="mt-2" />
                </div>

                <div class="mt-4 px-4 ">
                    <x-input-label for="measurement" :value="__('Measurement')" />
                    <x-text-input id="measurement" class="block mt-1 w-full" type="text" name="measurement" :value="old('measurement')" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('measurement')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                <x-input-label for="state" :value="__('State')" />
                        <select id="state" class="block mt-1 w-full" name="state" :value="old('state')" required autofocus>
                            <option value="1">Cebu</option>
                            <option value="1">Manila</option>
                        </select>
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="zip" :value="__('Zip')" />
                    <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="bed" :value="__('Bed')" />
                    <x-text-input id="bed" class="block mt-1 w-full" type="text" name="bed" :value="old('bed')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('bed')" class="mt-2" />
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="provision" :value="__('Provision')" />
                    <x-text-input id="provision" class="block mt-1 w-full" type="text" name="provision" :value="old('provision')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('provision')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                <x-input-label for="status" :value="__('Property Statuss')" />
                        <select id="status" class="block mt-1 w-full" name="status" :value="old('status')" required autofocus>
                            <option value="0">For Rent</option>
                            <option value="1">For Sale</option>
                        </select>
                </div>

                <div class="mt-4 px-4 ">
                <x-input-label for="approve" :value="__('Approve')" />
                        <select id="approve" class="block mt-1 w-full" name="approve" :value="old('approve')" required autofocus>
                            <option value="0">Approve</option>
                            <option value="1">Disapprove</option>
                        </select>
                </div>

                <div class="mt-4 px-4"> 
                    <x-input-label for="img" :value="__('Image')" />
                    <div>
                    <x-text-input id="img" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="img[]" multiple :value="old('img')" accept=".jpg, .jpeg, .png" autocomplete="on" />
                    </div>
                </div>
                <!-- <div class="mt-4 px-4"> 
                    <x-input-label for="vid" :value="__('Video')" />
                    <div>
                    <x-text-input id="vid" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="vid" :value="old('vid')" accept="video/*" autocomplete="on" />
                    </div>
                </div> -->
                <div class="">
                    <x-primary-button class="flex justify-end mt-8 ml-32 px-4">
                        {{ __('Add Property') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
