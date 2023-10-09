<x-app-layout>
<div class=" flex flex-row sm:px-6 lg:-ml-9">
    @role('Admin')
    <div class="flex flex-col items-center w-max -mt-[35rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
    @role('Marketing')
        <div class="flex flex-col items-center w-max -mt-[30rem] sm:px-6 lg:ml-[33rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole       
                <p class="font-poppins mb-4 text-2xl underline underline-offset-8">Create Updates / News</p>
            <form method="POST" action="{{route('updates.store') }}" class="flex flex-col flex-wrap w-max h-[430px]" enctype="multipart/form-data">  
                @csrf
                <!-- Name -->
                <div class="mt-4 px-4">
                    <x-input-label for="titleHeading" :value="__('Heading')" />
                    <x-text-input id="titleHeading" class="block mt-1 w-full" type="text" name="titleHeading" :value="old('titleHeading')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="titleSub" :value="__('Subheading')" />
                    <x-text-input id="titleSub" class="block mt-1 w-full" type="text" name="titleSub" :value="old('titleSub')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('titleSub')" class="mt-2" />
                </div>

                <div class="mt-4 px-4 ">
                    <x-input-label for="date" :value="__('Date')" />
                    <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autocomplete="name"  />
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>
  
                @role('Admin')
                <div class="mt-4 px-4 ">
                <x-input-label for="status" :value="__('Status')" />
                        <select id="status" class="block mt-1 w-full" name="status" :value="old('status')" required autofocus>
                        <option value="">Status</option>
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

                <div class="mt-4 px-4">
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea id="description" class="block mt-1 w-[450px] h-[350px] resize rounded-md" type="text" name="description" :value="old('description')" required autofocus autocomplete="name"></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>


                <div class="mt-4 px-4"> 
                    <x-input-label for="coverphoto" :value="__('Cover Image Upload')" />
                    <div>
                    <x-text-input id="coverphoto" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="coverphoto" multiple :value="old('coverphoto')" accept=".jpg, .jpeg, .png" autocomplete="on" />
                    </div>
                </div>

                <div class="mt-4 px-4"> 
                    <x-input-label for="img" :value="__('Image Upload')" />
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
