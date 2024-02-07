<x-app-layout>
    @role('Admin')
    <div class="flex flex-col items-center w-max h-max mt-[8rem] ml-[25rem] mb-8 bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
    @role('Marketing')
        <div class="flex flex-col items-center w-max -mt-[35rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole       
        <a href="{{ route('properties.index')}}"><i class="absolute -ml-[30rem] mt-[2rem] fa-solid fa-arrow-left text-[20px]"></i></a> 
        <p class="font-poppin mb-4 text-2xl underline underline-offset-8">CREATE PROPERTY</p>
            <form method="POST" action="{{route('properties.store') }}" class="grid grid-cols-3 w-max h-max py-4" enctype="multipart/form-data">  
                @csrf
                <!-- Name -->
                <!-- <div class="mt-4 px-4">
                    <x-input-label for="name" :value="__('Property Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div> -->

                <div class="mt-4 px-4">
                <x-input-label for="name" :value="__('Property Name')" />
                        <select id="name" class="block mt-1 w-full" name="name" :value="old('name')" required autofocus>
                        <option value="" >Property Name</option>
                        @foreach($project as $p)
                        <option value="{{$p->name}}">{{$p->name}}</option>
                        @endforeach
                        </select>
                </div>

                <div class="mt-4 px-4">
                <x-input-label for="type" :value="__('Property Type')" />
                        <select id="type" class="block mt-1 w-full" name="type" :value="old('type')" required autofocus>
                        <option value="" >Type</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Condominium">Condominium</option>
                        <option value="Commercial Space">Commercial Space</option>
                        <option value="House and Lot">House and Lot</option>
                        </select>
                </div>

                <div class="mt-4 px-4">
                <x-input-label for="unitType" :value="__('Property Unit Type')" />
                        <select id="unitType" class="block mt-1 w-full" name="unitType" :value="old('unitType')" required autofocus>
                        <option value="" >Unit Type</option>
                        @foreach($unitType as $u)
                        <option value="{{$u->name}}">{{$u->name}}</option>
                        @endforeach
                        </select>
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="sizes" :value="__('Unit Size (Sqm)')" />
                    <x-text-input id="sizes" class="block mt-1 w-full" type="text" name="sizes" :value="old('sizes')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('sizes')" class="mt-2" />
                </div>

                <!-- <div class="mt-4  px-4">
                    <x-input-label for="price" :value="__('Price Range')" />
                    <select id="price" class="block mt-1 w-full" name="price" :value="old('price')" required autofocus>
                    <option value="">Total Contact Price</option>
                    <option value="1,000,000">1,000,000</option>
                    <option value="3,000,000">3,000,000</option>
                    <option value="4,000,000">5,000,000</option>
                    <option value="6,000,000">5,000,000</option>
                    <option value="9,000,000">9,000,000</option>
                    <option value="10,000,000">10,000,000</option>
                    <option value="12,000,000">12,000,000</option>
                        </select>
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div> -->


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
                    <option value="Lapu-Lapu">Lapu-Lapu</option>
                        </select>
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="zip" :value="__('Zip')" />
                    <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                </div>



                <!-- <div class="mt-4 px-4">
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
                </div> -->


                <div class="mt-4 px-4">
                <x-input-label for="availability" :value="__('Availability')" />
                        <select id="availability" class="block mt-1 w-full" name="availability" :value="old('availability')" required autofocus>
                        <option value="">Availability</option>
                            <option value="For Rent">For Rent</option>
                            <option value="For Sale">For Sale</option>
                            <option value="For Sale">Pre-Selling</option>
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

                <div class="col-span-3 border-t-[1px] border-b-[1px] py-2 border-black mt-4 ">
                <p class="font-poppin text-base text-center">DESCRIPTION</p>
                </div>

        
                <div class="mt-4 px-4">
                    <x-input-label for="description" :value="__('Property Description')" />
                    <textarea id="description" class="block mt-1 w-[250px] h-[150px] rounded-md" type="text" name="description" :value="old('description')" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="unitdesc" :value="__('Unit Size Description')" />
                    <textarea id="unitdesc" class="block mt-1 w-[250px] h-[150px]  rounded-md" type="text" name="unitdesc" :value="old('unitdesc')" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('unitdesc')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="locationdesc" :value="__('Area Description')" />
                    <textarea id="locationdesc" class="block mt-1 w-[250px] h-[150px]  rounded-md" type="text" name="locationdesc" :value="old('locationdesc')" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('locationdesc')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="furnishdesc" :value="__('Furnish Description')" />
                    <textarea id="furnishdesc" class="block mt-1 w-[250px] h-[150px]  rounded-md" type="text" name="furnishdesc" :value="$property->furnishdesc" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('furnishdesc')" class="mt-2" />
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="beddesc" :value="__('Bed Description')" />
                    <textarea id="beddesc" class="block mt-1 w-[250px] h-[150px]  rounded-md" type="text" name="beddesc" :value="old('beddesc')" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('beddesc')" class="mt-2" />
                </div>

                <div class="col-span-3 border-t-[1px] border-b-[1px] py-2 border-black mt-4 ">
                <p class="font-poppin text-base text-center">UPLOADS</p>
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
                <div class="mt-4 px-4"> 
                    <x-input-label for="vid" :value="__('Video Upload')" />
                    <div>
                    <x-text-input id="vid" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="vid" multiple :value="old('vid')" accept="video/*" autocomplete="on" />
                    </div>
                </div>

                <div class="mt-4 px-4"> 
                    <x-input-label for="priceimg" :value="__('Pricing Image Upload')" />
                    <div>
                    <x-text-input id="priceimg" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="priceimg" multiple :value="old('priceimg ')" accept=".jpg, .jpeg, .png" autocomplete="on" />
                    </div>
                </div>

                <div class="col-span-3 border-t-[1px] border-b-[1px] py-2 border-black mt-4 ">
                <p class="font-poppin text-base text-center">REMARKS</p>
                </div>

                @role('Admin')
                <div class="mt-4 px-4 ">
                <x-input-label for="status" :value="__('Status')" />
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
                @endrole
                <!-- <div class="mt-4 px-4"> 
                    <x-input-label for="vid" :value="__('Video')" />
                    <div>
                    <x-text-input id="vid" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="vid" :value="old('vid')" accept="video/*" autocomplete="on" />
                    </div>
                </div> -->
                <div class="">
                    <x-primary-button class="flex justify-end mt-12 ml-32 px-4">
                        {{ __('Add Property') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
</x-app-layout>
