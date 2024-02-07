<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>


        <div class="absolute top-0  mt-56 flex flex-col w-max sm:px-6 lg:ml-[20rem]">
            <div class=" bg-gold w-max self-end shadow-inner px-4 py-2 hover:shadow-md">
                <a href="{{route('projects.create')}}" class="text-center text-sm text-darkblue font-semibold hover:text-dirtywhite">CREATE PROJECT</a>
            </div>

            <div class="relative overflow-x-auto bg-dirtywhite border-2 border-darkblue shadow-md w-[1000px] h-max mt-4 ml-5">
                <table class="w-full  text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-darkblue border-2 border-dirtywhite-600 shadow-inner text-md text-dirtywhite uppercase">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                            Project Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                             Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Action
                        </th>
                          
                        </tr>
                    </thead>
                    <tbody>

                    @forelse ($projects as $project)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{$project->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$project->status}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('projects.edit', $project->id)}}" class="mr-5"><i class="fa-solid fa-pen"></i> </a>          
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No projects found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="flex flex-row justify-evenly mt-4">
                {{$projects->links()}}
            </div>    
            </div>         
        </div>
</x-app-layout>
