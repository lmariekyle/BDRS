<x-app-layout>
<div class=" flex flex-row sm:px-6 lg:-ml-9">
    @role('Admin')
        <div class="flex flex-col items-center w-max mt-[8rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
    @role('Marketing')
        <div class="flex flex-col items-center w-max mt-[8rem] sm:px-6 lg:ml-[25rem] bg-dirtywhite border-l-blue-950 shadow-md">
    @endrole
                <p class="font-poppins mb-4 text-2xl underline underline-offset-8">Update Project</p>
            <form method="POST" action="{{route('projects.update' , $project->id) }}" class="grid grid-cols-2 w-max h-max py-4" enctype="multipart/form-data">  
            @method('PUT') 
                @csrf
                <!-- Name -->
                <div class="mt-4 px-4">
                    <x-input-label for="name" :value="__('Project Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$project->name" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>


                <div class="mt-4 px-4 ">
                <x-input-label for="status" :value="__(' Status')" />
                        <select id="status" class="block mt-1 w-full" name="status" :value="$project->status" required autofocus>
                            <option value="Approved" {{ $project->status === 'Approved' ? 'selected' : ''}} >Approve</option>
                            <option value="Disapprove" {{ $project->status === 'Disapprove' ? 'selected' : ''}}>Disapprove</option>
                        </select>
                </div>

        

                <div class="">
                    <x-primary-button class="flex justify-start mt-8 ml-32 px-4">
                        {{ __('Update Project') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
