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
                    School</button>
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
