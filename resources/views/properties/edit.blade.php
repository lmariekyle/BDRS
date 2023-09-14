<x-app-layout>
<div class=" flex flex-row sm:px-6 lg:-ml-9">
        <div class="flex flex-col items-center w-max -mt-[27rem] sm:px-6 lg:ml-[30rem] bg-dirtywhite border-l-blue-950 shadow-md">
                <p class="font-poppins mb-4 text-2xl underline underline-offset-8">Update Property</p>
            <form method="POST" action="{{route('properties.update' , $property->id) }}" class="flex flex-col flex-wrap w-max h-[430px]" enctype="multipart/form-data">  
            @method('PUT') 
                @csrf
                <!-- Name -->
                <div class="mt-4 px-4">
                    <x-input-label for="name" :value="__('Property Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$property->name" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                <x-input-label for="type" :value="__('Property Type')" />
                        <select id="type" class="block mt-1 w-full" name="type" :value="$property->type" required autofocus>
                            <option value="Condominium">Condominium</option>
                            <option value="Apartment">Apartment</option>
                        </select>
                </div>

                <div class="mt-4  px-4">
                    <x-input-label for="price" :value="__('Price')" />
                    <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="$property->price" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                    <x-input-label for="sizes" :value="__('Size')" />
                    <x-text-input id="sizes" class="block mt-1 w-full" type="text" name="sizes" :value="$property->sizes" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('dateOfBirth')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="$property->address" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                <x-input-label for="state" :value="__('State')" />
                        <select id="state" class="block mt-1 w-full" name="state" :value="$property->state" required autofocus>
                            <option value="Cebu">Cebu</option>
                            <option value="Manila">Manila</option>
                        </select>
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="zip" :value="__('Zip')" />
                    <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="$property->zip" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="bed" :value="__('Bed')" />
                    <x-text-input id="bed" class="block mt-1 w-full" type="text" name="bed" :value="$property->bed" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('bed')" class="mt-2" />
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="provision" :value="__('Provision')" />
                    <x-text-input id="provision" class="block mt-1 w-full" type="text" name="provision" :value="$property->provision" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('provision')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                <x-input-label for="status" :value="__('Property Status')" />
                        <select id="status" class="block mt-1 w-full" name="status" :value="$property->status" required autofocus>
                            <option value="For Rent">For Rent</option>
                            <option value="For Sale">For Sale</option>
                        </select>
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="description" :value="__('Property Description')" />
                    <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="mt-4 px-4 ">
                <x-input-label for="featured" :value="__('Featured')" />
                        <select id="featured" class="block mt-1 w-full" name="featured" :value="$property->featured" required autofocus>
                            <option value="Feature">Feature</option>
                            <option value="Not">Not Featured</option>
                        </select>
                </div>
                

                <div class="mt-4 px-4"> 
                    <x-input-label for="img" :value="__('Image')" />
                    <div>
                    <x-text-input id="img" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="img[]" multiple :value="old('img[]')" accept=".jpg, .jpeg, .png" autocomplete="on" />
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
                        {{ __('Update Property') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
