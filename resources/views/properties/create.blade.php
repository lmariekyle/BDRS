<x-app-layout>
<div class=" flex flex-row sm:px-6 lg:-ml-9">
    @role('Admin')
    <div class="flex flex-col items-center w-max -mt-[35rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
    @role('Marketing')
        <div class="flex flex-col items-center w-max -mt-[25rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole       
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
                        <option value="">Property Type</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Condominium">Condominium</option>
                        <option value="Studio Unit Type">Studio Unit</option>
                        <option value="Loft Unit Type">Loft Unit</option>
                        <option value="Penthouse Unit Type">Penthouse Unit</option>
                        <option value="Town House">Town House</option>
                        <option value="Villa">Villa</option>
                        <option value="Row House">Row House</option>
                        <option value="Duplex House">Duplex House</option>
                        <option value="Single Detached House">Single Detached House</option>
                        <option value="Office">Office</option>
                        <option value="Retail">Retail</option>
                        <option value="Industrial">Industrial</option>
                        </select>
                </div>

                <div class="mt-4  px-4">
                    <x-input-label for="price" :value="__('Price Range')" />
                    <select id="price" class="block mt-1 w-full" name="price" :value="old('price')" required autofocus>
                    <option value="">Price</option>
                    <option value="100,000">100,000</option>
                    <option value="500,000">500,000</option>
                    <option value="1,000,000">1,000,000</option>
                    <option value="3,000,000">3,000,000</option>
                    <option value="5,000,000">5,000,000</option>
                    <option value="8,000,000">8,000,000</option>
                    <option value="10,000,000">10,000,000</option>
                        </select>
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                    <x-input-label for="sizes" :value="__('Size')" />
                    <select id="sizes" class="block mt-1 w-full" name="sizes" :value="old('sizes')" required autofocus>
                    <option value="">Measurement</option>
                    <option value="18">18 Sqm</option>
                    <option value="22">22 Sqm</option>
                    <option value="42">42 Sqm</option>
                    <option value="50">50 Sqm</option>
                    <option value="100">100 Sqm</option>
                    <option value="200">200 Sqm</option>
                    <option value="201">Above 201 Sqm</option>
                    </select>
                    <x-input-error :messages="$errors->get('sizes')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4 ">
                <x-input-label for="state" :value="__('State')" />
                        <select id="state" class="block mt-1 w-full" name="state" :value="old('state')" required autofocus>
                        <option value="">State</option>
                            <option value="Cebu">Cebu</option>
                            <option value="Manila">Manila</option>
                        </select>
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="zip" :value="__('Zip')" />
                    <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="bed" :value="__('Bed')" />
                    <select id="bed" class="block mt-1 w-full" name="bed" :value="old('bed')" required autofocus>
                    <option value="0">Number of Bed</option>
                    <option value="0">Studio Only</option>
                    <option value="1">1 bedroom</option>
                    <option value="2">2 bedrooms</option>
                    <option value="3">3 bedrooms</option>
                    <option value="4">4 bedrooms</option>
                    <option value="5">5 bedrooms</option>
                        </select>
                    <x-input-error :messages="$errors->get('bed')" class="mt-2" />
                </div>
                <div class="mt-4 px-4">
                <x-input-label for="availability" :value="__('Availability')" />
                        <select id="availability" class="block mt-1 w-full" name="availability" :value="old('availability')" required autofocus>
                        <option value="">Availability</option>
                            <option value="For Rent">For Rent</option>
                            <option value="For Sale">For Sale</option>
                        </select>
                </div>

                <div class="mt-4 px-4">
                <x-input-label for="furnish" :value="__('Furnish')" />
                        <select id="furnish" class="block mt-1 w-full" name="furnish" :value="old('furnish')" required autofocus>
                        <option value="">Furnish</option>
                            <option value="Not Furnished">Not Furnished</option>
                            <option value="Partially Furnished">Partially Furnished</option>
                            <option value="Fully Furnished">Fully Furnished</option>
                        </select>
                </div>
                
                <div class="mt-4 px-4 ">
                <x-input-label for="status" :value="__('Property Status')" />
                        <select id="status" class="block mt-1 w-full" name="status" :value="old('status')" required autofocus>
                        <option value="">Property Status</option>
                            <option value="Approved">Approve</option>
                            <option value="Disapprove">Disapprove</option>
                        </select>
                </div>

                <div class="mt-4 px-4 ">
                <x-input-label for="featured" :value="__('Feature')" />
                        <select id="featured" class="block mt-1 w-full" name="featured" :value="old('featured')" required autofocus>
                        <option value="Not Featured">Not Featured</option>
                            <option value="Featured">Featured</option>
                        </select>
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="description" :value="__('Property Description')" />
                    <textarea id="description" class="block mt-1 w-[250px] h-[350px] resize rounded-md" type="text" name="description" :value="old('description')" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>


                <div class="mt-4 px-4"> 
                    <x-input-label for="coverphoto" :value="__('Cover Image Upload')" />
                    <div>
                    <x-text-input id="coverphoto" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="coverphoto" multiple :value="old('coverphoto')" accept=".jpg, .jpeg, .png" autocomplete="on" />
                    </div>
                </div>

                <div class="mt-4 px-4"> 
                    <x-input-label for="img" :value="__('Amenities Image Upload')" />
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
