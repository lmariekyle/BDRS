<x-app-layout>
<div class=" flex flex-row sm:px-6 lg:-ml-9">
    @role('Admin')
        <div class="flex flex-col items-center w-max mt-[8rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
    @role('Marketing')
        <div class="flex flex-col items-center w-max mt-[8rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
        <a href="{{ route('updates.index')}}"><i class="absolute -ml-[20rem] mt-[2rem] fa-solid fa-arrow-left text-[20px]"></i></a> 
                <p class="font-poppins mb-4 text-2xl underline underline-offset-8">Update Post</p>
            <form method="POST" action="{{route('updates.update' , $update->id) }}" class="grid grid-cols-2 w-max h-max py-4" enctype="multipart/form-data">  
            @method('PUT') 
                @csrf
                <!-- Name -->
                <div class="mt-4 px-4">
                    <x-input-label for="titleHeading" :value="__('Title Heading')" />
                    <x-text-input id="titleHeading" class="block mt-1 w-full" type="text" name="titleHeading" :value="$update->titleHeading" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('titleHeading')" class="mt-2" />
                </div>

                <div class="mt-4 px-4">
                    <x-input-label for="titleSub" :value="__('Subheading')" />
                    <x-text-input id="titleSub" class="block mt-1 w-full" type="text" name="titleSub" :value="$update->titleSub" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('titleSub')" class="mt-2" />
                </div>
                

                <div class="mt-4 px-4">
                    <x-input-label for="date" :value="__('Date')" />
                    <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="$update->date" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>


                <div class="mt-4 px-4 col-span-2">
                    <x-input-label for="firstParagraph" :value="__('First Paragraph')" />
                    <textarea id="firstParagraph" class="block mt-1 w-[650px] h-[150px] rounded-md" type="text" name="firstParagraph" :value="$update->firstParagraph" required autofocus autocomplete="name">{{$update->firstParagraph}}</textarea>
                    <x-input-error :messages="$errors->get('firstParagraph')" class="mt-2" />
                </div>

                <div class="mt-4 px-4 col-span-2">
                    <x-input-label for="secondParagraph" :value="__('Second Paragraph')" />
                    <textarea id="secondParagraph" class="block mt-1 w-[650px] h-[150px] rounded-md" type="text" name="secondParagraph" :value="$update->secondParagraph" required autofocus autocomplete="name">{{$update->secondParagraph}}</textarea>
                    <x-input-error :messages="$errors->get('secondParagraph')" class="mt-2" />
                </div>

                <div class="mt-4 px-4 col-span-2">
                    <x-input-label for="thirdParagraph" :value="__('Third Paragraph')" />
                    <textarea id="thirdParagraph" class="block mt-1 w-[650px] h-[150px] rounded-md" type="text" name="thirdParagraph" :value="$update->thirdParagraph" required autofocus autocomplete="name">{{$update->thirdParagraph}}</textarea>
                    <x-input-error :messages="$errors->get('thirdParagraph')" class="mt-2" />
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

                <div class="mt-4 px-4 col-span-2"> 
                    <x-input-label for="vid" :value="__('Video Upload')" />
                    <div>
                    <x-text-input id="vid" class="block mt-1 w-full file:w-[7rem] file:h-[42px]file:overflow-hidden file:bg-darkblue file:text-[14px] file:text-dirtywhite file:font-poppins file:cursor-pointer" type="file" name="vid" multiple :value="old('$update->vid')" accept="video/*" autocomplete="on" />
                    </div>
                </div>

                @role('Admin')
                <div class="mt-4 px-4 ">
                <x-input-label for="status" :value="__(' Status')" />
                        <select id="status" class="block mt-1 w-full" name="status" :value="$update->status" required autofocus>
                            <option value="Approved" {{ $update->status === 'Approved' ? 'selected' : ''}} >Approve</option>
                            <option value="Disapprove" {{ $update->status === 'Disapprove' ? 'selected' : ''}}>Disapprove</option>
                        </select>
                </div>

                <div class="mt-4 px-4 ">
                <x-input-label for="featured" :value="__('Feature')" />
                        <select id="featured" class="block mt-1 w-full" name="featured" :value="$update->featured" required autofocus>
                            <option value="Featured" {{ $update->featured === 'Featured' ? 'selected' : ''}}>Featured</option>
                            <option value="Not Featured" {{ $update->featured === 'Not Featured' ? 'selected' : ''}}>Not Featured</option>
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
                    <x-primary-button class="flex justify-start mt-8 ml-32 px-4">
                        {{ __('Update Post') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
