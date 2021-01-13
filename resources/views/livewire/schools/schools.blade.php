    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Manage Schools
        </h2>
        <div class="py-12">
            <div class="mx-auto text-gray-700 max-w-7xl sm:px-6 lg:px-8">
                <div class="px-4 py-4 overflow-hidden text-black max-w-7xl sm:px-6 lg:px-8">

                    <h2 class="px-4 py-4 overflow-hidden ">
                        @if (session()->has('message'))
                            <div class="flex">
                                <div>
                                    <p class="text-sm">{{ session('message') }}</p>
                                </div>
                            </div>
                </div>
                @endif
                <button wire:click="create()"
                    class="px-4 py-2 my-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Create
                    School
                </button>
                @if ($isOpen)
                    @include('livewire.schools.create')
                @endif
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="bg-black-500">
                            <th class="w-20 px-4 py-2">No.</th>
                            <th class="px-4 py-2">address_id</th>
                            <th class="px-4 py-2">School_name</th>
                            <th class="px-4 py-2">school_principal</th>
                            <th class="px-4 py-2">other_school_details</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schools as $school)
                            <tr>
                                <td class="px-4 py-2 border">{{ $school->id }}</td>
                                <td class="px-4 py-2 border">{{ $school->address_id }}</td>
                                <td class="px-4 py-2 border">{{ $school->School_name }}</td>
                                <td class="px-4 py-2 border">{{ $school->school_principal }}
                                </td>
                                <td class="px-4 py-2 border">{{ $school->other_school_details }}
                                </td>
                                <td class="px-4 py-2 border">
                                    <button wire:click="edit({{ $school->id }})"
                                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
                                        {{-- <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg> --}}
                                        {{-- <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                            </path> --}}
                                    <button wire:click="delete({{ $school->id }})"
                                        class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
