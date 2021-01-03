<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Manage classes
    </h2>
</x-slot>
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="px-4 py-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
            @if (session()->has('message'))
                <div class="px-4 py-3 my-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <button wire:click="create()"
                class="px-4 py-2 my-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Create new class</button>
            @if ($isOpen)
                @include('livewire.classes.create')
            @endif
            <table class="w-full table-fixed">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="w-20 px-4 py-2">No.</th>
                        <th class="px-4 py-2">class_code</th>
                        <th class="px-4 py-2">class_name</th>
                        <th class="px-4 py-2">teacher_id</th>
                        <th class="px-4 py-2">school_id</th>
                        {{-- <th class="px-4 py-2">subject_id</th> --}}
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $class)
                        <tr>
                            <td class="px-4 py-2 border">{{ $class->id }}</td>
                            <td class="px-4 py-2 border">{{ $class->class_code }}</td>
                            <td class="px-4 py-2 border">{{ $class->class_name }}</td>
                            <td class="px-4 py-2 border">{{ $class->teacher_id }}</td>
                            <td class="px-4 py-2 border">{{ $class->school_id }}</td>
                            {{-- <td class="px-4 py-2 border">{{ $class->subject_id }}</td> --}}
                            <td class="px-4 py-2 border">
                                <button wire:click="edit({{ $class->id }})"
                                    class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
                                <button wire:click="delete({{ $class->id }})"
                                    class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
