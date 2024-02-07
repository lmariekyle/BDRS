<x-app-layout>
<div class=" flex flex-row sm:px-6 lg:-ml-9">
    @role('Admin')
    <div class="flex flex-col items-center w-max mt-[15rem] sm:px-6 lg:ml-[35rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
    @role('Marketing')
        <div class="flex flex-col items-center w-max mt-[15rem] sm:px-6 lg:ml-[35rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole       
                <p class="font-poppin mb-4 text-2xl underline underline-offset-8">Create Project</p>
            <form method="POST" action="{{route('projects.store')}}" class="grid grid-cols-2 w-max h-max py-4" enctype="multipart/form-data">  
                @csrf
                <!-- Name -->
                <div class="mt-4 px-4">
                    <x-input-label for="name" :value="__('Project Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

          
                <div class="mt-4 px-4 ">
                <x-input-label for="status" :value="__('Status')" />
                        <select id="status" class="block mt-1 w-full" name="status" :value="old('status')" required autofocus>
                        <option value="">Status</option>
                            <option value="Approved">Approve</option>
                            <option value="Disapprove">Disapprove</option>
                        </select>
                </div>
          

                <div class="">
                    <x-primary-button class="flex justify-end mt-8  px-4 col-start-2">
                        {{ __('Add Project') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
