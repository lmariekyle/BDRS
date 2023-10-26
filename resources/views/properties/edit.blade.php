<x-app-layout>
<div class=" flex flex-row sm:px-6 lg:-ml-9">
    @role('Admin')
        <div class="flex flex-col items-center w-max -mt-[38rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
    @role('Marketing')
        <div class="flex flex-col items-center w-max -mt-[30rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
                <p class="font-poppins mb-4 text-2xl underline underline-offset-8">Update Property</p>
            <form method="POST" action="{{route('properties.update' , $property->id) }}" class="flex flex-col flex-wrap w-[1300px] h-[800px]" enctype="multipart/form-data">  
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
                <select id="type" class="block mt-1 w-full" name="type" required autofocus>
                    <option value="">Property Type</option>
                    <option value="Apartment" {{ $property->type === 'Apartment' ? 'selected' : '' }}>Apartment</option>
                    <option value="Condominium" {{ $property->type === 'Condominium' ? 'selected' : '' }}>Condominium</option>
                    <option value="Studio Unit" {{ $property->type === 'Studio Unit' ? 'selected' : '' }}>Studio Unit</option>
                    <option value="Loft Unit" {{ $property->type === 'Loft Unit' ? 'selected' : '' }}>Loft Unit</option>
                    <option value="Penthouse Unit" {{ $property->type === 'Penthouse Unit' ? 'selected' : '' }}>Penthouse Unit</option>
                    <option value="Town House" {{ $property->type === 'Town House' ? 'selected' : '' }}>Town House</option>
                    <option value="Villa" {{ $property->type === 'Villa' ? 'selected' : '' }}>Villa</option>
                    <option value="Row House" {{ $property->type === 'Row House' ? 'selected' : '' }}>Row House</option>
                    <option value="Duplex House" {{ $property->type === 'Duplex House' ? 'selected' : '' }}>Duplex House</option>
                    <option value="Single Detached House" {{ $property->type === 'Single Detached House' ? 'selected' : '' }}>Single Detached House</option>
                    <option value="Office" {{ $property->type === 'Office' ? 'selected' : '' }}>Office</option>
                    <option value="Retail" {{ $property->type === 'Retail' ? 'selected' : '' }}>Retail</option>
                    <option value="Industrial" {{ $property->type === 'Industrial' ? 'selected' : '' }}>Industrial</option>
                </select>
            </div>

            <div class="mt-4 px-4">
                <x-input-label for="type" :value="__('Property Unit Type')" />
                <select id="type" class="block mt-1 w-full" name="unitType" required autofocus>
                    <option value="" >Unit Type</option>
                    <option value="Studio Home Office" {{ $property->type === 'Studio Home Office' ? 'selected' : '' }}>Studio Home Office</option>
                    <option value="Bedroom Home Office" {{ $property->type === 'Bedroom Home Office' ? 'selected' : '' }}>Bedroom Home Office</option>
                    <option value="Studio Residence" {{ $property->type === 'Studio Residence' ? 'selected' : '' }}>Studio Residence</option>
                    <option value="1 Bedroom Residence" {{ $property->type === '1 Bedroom Residence' ? 'selected' : '' }}>1 Bedroom Residence</option>
                    <option value="2 Bedroom Residence" {{ $property->type === '2 Bedroom Residence' ? 'selected' : '' }}>2 Bedroom Residence</option>
                </select>
            </div>


                <div class="mt-4  px-4">
                    <x-input-label for="price" :value="__('Price Range')" />
                
                    <select id="price" class="block mt-1 w-full" name="price" required autofocus>
                        <option value="1,000,000" {{ $property->price === '1,000,000' ? 'selected' : '' }}>₱1,000,000</option>
                        <option value="3,000,000" {{ $property->price === '3,000,000' ? 'selected' : '' }}>₱3,000,000</option>
                        <option value="4,000,000" {{ $property->price === '4,000,000' ? 'selected' : '' }}>₱4,000,000</option>
                        <option value="6,000,000" {{ $property->price === '6,000,000' ? 'selected' : '' }}>₱6,000,000</option>
                        <option value="9,000,000" {{ $property->price === '9,000,000' ? 'selected' : '' }}>₱9,000,000</option>
                        <option value="10,000,000" {{ $property->price === '10,000,000' ? 'selected' : '' }}>₱10,000,000</option>
                        <option value="12,000,000" {{ $property->price === '12,000,000' ? 'selected' : '' }}>12,000,000</option>
                    </select>

                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>


                <!-- <div class="mt-4 px-4 ">
                    <x-input-label for="sizes" :value="__('Size')" />
                    <select id="sizes" class="block mt-1 w-full" name="sizes" required autofocus>
                        <option value="18" {{ $property->sizes === '18 Sqm' ? 'selected' : '' }}>18 Sqm</option>
                        <option value="22" {{ $property->sizes === '22 Sqm' ? 'selected' : '' }}>22 Sqm</option>
                        <option value="42" {{ $property->sizes === '42 Sqm' ? 'selected' : '' }}>42 Sqm</option>
                        <option value="50" {{ $property->sizes === '50 Sqm' ? 'selected' : '' }}>50 Sqm</option>
                        <option value="100" {{ $property->sizes === '100 Sqm' ? 'selected' : '' }}>100 Sqm</option>
                        <option value="200" {{ $property->sizes === '200 Sqm' ? 'selected' : '' }}>200 Sqm</option>
                        <option value="201" {{ $property->sizes === '201 Sqm' ? 'selected' : '' }}>Above 201 Sqm</option>
                    </select>
                    <x-input-error :messages="$errors->get('sizes')" class="mt-2" />
                </div> -->

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


                <!-- <div class="mt-4 px-4">
                    <x-input-label for="bed" :value="__('Bed')" />
                    <select id="bed" class="block mt-1 w-full" name="bed" :value="$property->bed" required autofocus>
                        <option value="0" {{ $property->bed === '0' ? 'selected' : '' }}>Studio Only</option>
                        <option value="1" {{ $property->bed === '1' ? 'selected' : ''}}>1 bedroom</option>
                        <option value="2" {{ $property->bed === '2' ? 'selected' : ''}}>2 bedrooms</option>
                        <option value="3" {{ $property->bed === '3' ? 'selected' : ''}}>3 bedrooms</option>
                        <option value="4" {{ $property->bed === '4' ? 'selected' : ''}}>4 bedrooms</option>
                        <option value="5" {{ $property->bed === '5' ? 'selected' : ''}}>5 bedrooms</option>
                    </select>
                    <x-input-error :messages="$errors->get('bed')" class="mt-2" />
                </div> -->



                <div class="mt-4 px-4">
                <x-input-label for="provision" :value="__('Availability')" />
                        <select id="provision" class="block mt-1 w-full" name="provision" :value="$property->provision" required autofocus>
                            <option value="For Rent" {{ $property->provision === 'For Rent' ? 'selected' : ''}}>For Rent</option>
                            <option value="For Sale" {{ $property->provision === 'For Sale' ? 'selected' : ''}}>For Sale</option>
                            <option value="For Sale" {{ $property->provision === 'Pre - Selling' ? 'selected' : ''}}>Pre - Selling</option>
                        </select>
                </div>

                <div class="mt-4 px-4">
                <x-input-label for="furnish" :value="__('Furnish')" />
                        <select id="furnish" class="block mt-1 w-full" name="furnish" :value="$property->furnish" required autofocus>
                        <option value="">Furnish</option>
                            <option value="Not Furnished" {{ $property->furnish === 'Not Furnished' ? 'selected' : ''}}>Not Furnished</option>
                            <option value="Partially Furnished" {{ $property->furnish === 'Partially Furnished' ? 'selected' : ''}}>Partially Furnished</option>
                            <option value="Fully Furnished" {{ $property->furnish === 'Fully Furnished' ? 'selected' : ''}}>Fully Furnished</option>
                        </select>
                </div>

                <div class="mt-4 px-4 ">
                <x-input-label for="status" :value="__('Property Status')" />
                        <select id="status" class="block mt-1 w-full" name="status" :value="$property->status" required autofocus>
                            <option value="Approved" {{ $property->status === 'Approved' ? 'selected' : ''}} >Approve</option>
                            <option value="Disapprove" {{ $property->status === 'Disapprove' ? 'selected' : ''}}>Disapprove</option>
                        </select>
                </div>

                <div class="mt-4 px-4 ">
                <x-input-label for="featured" :value="__('Feature')" />
                        <select id="featured" class="block mt-1 w-full" name="featured" :value="$property->featured" required autofocus>
                            <option value="Featured" {{ $property->featured === 'Featured' ? 'selected' : ''}}>Featured</option>
                            <option value="Not Featured" {{ $property->featured === 'Not Featured' ? 'selected' : ''}}>Not Featured</option>
                        </select>
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="description" :value="__('Property Description')" />
                    <textarea id="description" class="block mt-1 w-[250px] h-[350px] resize rounded-md" type="text" name="description" :value="$property->description" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="unitdesc" :value="__('Unit Size Description')" />
                    <textarea id="unitdesc" class="block mt-1 w-[250px] h-[150px] resize rounded-md" type="text" name="unitdesc" :value="$property->unitdesc" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('unitdesc')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="locationdesc" :value="__('Area Description')" />
                    <textarea id="locationdesc" class="block mt-1 w-[250px] h-[150px] resize rounded-md" type="text" name="locationdesc" :value="$property->locationdesc" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('locationdesc')" class="mt-2" />
                </div>


                <div class="mt-4 px-4">
                    <x-input-label for="pricedesc" :value="__('Price Description')" />
                    <textarea id="pricedesc" class="block mt-1 w-[250px] h-[150px] resize rounded-md" type="text" name="pricedesc" :value="$property->pricedesc" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('pricedesc')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="furnishdesc" :value="__('Furnish Description')" />
                    <textarea id="furnishdesc" class="block mt-1 w-[250px] h-[150px] resize rounded-md" type="text" name="furnishdesc" :value="$property->furnishdesc" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('furnishdesc')" class="mt-2" />
                </div>
                <div class="mt-4 px-4">
                    <x-input-label for="beddesc" :value="__('Bed Description')" />
                    <textarea id="beddesc" class="block mt-1 w-[250px] h-[150px] resize rounded-md" type="text" name="beddesc" :value="$property->beddesc" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('beddesc')" class="mt-2" />
                </div>
                
                <div class="mt-4 px-4"> 
                    <x-input-label for="coverphoto" :value="__('Cover Image Upload')" />
                    <div>
                    <x-text-input id="coverphoto" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="coverphoto" multiple :value="old('coverphoto')" accept=".jpg, .jpeg, .png" autocomplete="on" />
                    </div>
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
