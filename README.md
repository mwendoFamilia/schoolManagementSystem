-------------------------------------------------------------------------------------------------------------------------------

-------------------------------------------------------------------------------------------------------------------------------
1. Make Model & Migration 
    ```language
    
    ```php artisan make:model Todo -m
    
2. After that, open create_todos_table.php file inside Laravel8CRUD/database/migrations/ directory. And the update the function up() with following code:
    public function up()
     ```language
        {
            Schema::create('todos', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description');
                $table->timestamps();
            });
        }
     ```
    
3. Then add the fillable property in Todo.php, which is placed on app/models direcotry:

            ```language
                        <?php
                    
                    namespace App\Models;
                    
                    use Illuminate\Database\Eloquent\Factories\HasFactory;
                    use Illuminate\Database\Eloquent\Model;
                    
                    class Todo extends Model
                    {
                        use HasFactory;
                    
                        protected $fillable = [
                            'title', 'description',
                        ];
                    }
            ```

 4. Install Jetstream Auth with Livewire

 5.  Build Todos Livewire Component
        ```language
        php artisan make:livewire todos
        ```
 6. This command will create two files, which is located on following path:
     ```language
        app/Http/Livewire/Todos.php
        resources/views/livewire/Todos.blade.php

     ```
7. Create Routes
   ```language
    use App\Http\Livewire\Todos;
    
    Route::get('todos', Todos::class);
   ```
8.Update Todo Component File. Now, update the Todo.php component file with the following code, which is placed on app/Http/Livewire directory:
            ```language

                <?php
                
                namespace App\Http\Livewire;
                
                use Livewire\Component;
                use App\Models\Todo;
                
                class Todos extends Component
                {
                public $todos, $title, $description, $todo_id;
                    public $isOpen = 0;
                
            
                    /**
                    * The attributes that are mass assignable.
                    *
                    * @var array
                    */
                    public function render()
                    {
                        $this->todos = Todo::all();
                        return view('livewire.todos');
                    }
                
                    /**
                    * The attributes that are mass assignable.
                    *
                    * @var array
                    */
                    public function create()
                    {
                        $this->resetInputFields();
                        $this->openModal();
                    }
                
                    /**
                    * The attributes that are mass assignable.
                    *
                    * @var array
                    */
                    public function openModal()
                    {
                        $this->isOpen = true;
                    }
                
                    /**
                    * The attributes that are mass assignable.
                    *
                    * @var array
                    */
                    public function closeModal()
                    {
                        $this->isOpen = false;
                    }
                
                    /**
                    * The attributes that are mass assignable.
                    *
                    * @var array
                    */
                    private function resetInputFields(){
                        $this->title = '';
                        $this->description = '';
                        $this->todo_id = '';
                    }
                    
                    /**
                    * The attributes that are mass assignable.
                    *
                    * @var array
                    */
                    public function store()
                    {
                        $this->validate([
                            'title' => 'required',
                            'description' => 'required',
                        ]);
                    
                        Todo::updateOrCreate(['id' => $this->todo_id], [
                            'title' => $this->title,
                            'description' => $this->description
                        ]);
                
                        session()->flash('message', 
                            $this->todo_id ? 'Todo Updated Successfully.' : 'Todo Created Successfully.');
                
                        $this->closeModal();
                        $this->resetInputFields();
                    }
                    /**
                    * The attributes that are mass assignable.
                    *
                    * @var array
                    */
                    public function edit($id)
                    {
                        $Todo = Todo::findOrFail($id);
                        $this->todo_id = $id;
                        $this->title = $Todo->title;
                        $this->description = $Todo->description;
                    
                        $this->openModal();
                    }
                    
                    /**
                    * The attributes that are mass assignable.
                    *
                    * @var array
                    */
                    public function delete($id)
                    {
                        Todo::find($id)->delete();
                        session()->flash('message', 'Todo Deleted Successfully.');
                    }
                }

                ```
9. Create And Update Blade Files : 
In this step, open todo.blade.php file and update the following code into it, which is placed on resources/views/livewire directory:
    ````
    <x-slot name="header">
<h2 class="text-xl font-semibold leading-tight text-gray-800">
Manage todos (Laravel 8 Jetstream Livewire CRUD Example - Tutsmake.com)
</h2>
</x-slot>
<div class="py-12">
<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
<div class="px-4 py-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
@if (session()->has('message'))
<div class="px-4 py-3 my-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md" role="alert">
<div class="flex">
<div>
<p class="text-sm">{{ session('message') }}</p>
</div>
</div>
</div>
@endif
<button wire:click="create()" class="px-4 py-2 my-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Create Todo</button>
@if($isOpen)
@include('livewire.create')
@endif
<table class="w-full table-fixed">
<thead>
<tr class="bg-gray-100">
<th class="w-20 px-4 py-2">No.</th>
<th class="px-4 py-2">Title</th>
<th class="px-4 py-2">Desc</th>
<th class="px-4 py-2">Action</th>
</tr>
</thead>
<tbody>
@foreach($todos as $todo)
<tr>
<td class="px-4 py-2 border">{{ $todo->id }}</td>
<td class="px-4 py-2 border">{{ $todo->title }}</td>
<td class="px-4 py-2 border">{{ $todo->description}}</td>
<td class="px-4 py-2 border">
<button wire:click="edit({{ $todo->id }})" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
<button wire:click="delete({{ $todo->id }})" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
    ```

10. Then create one new blade view file name create.blade.php inside resources/views/livewire directory. And update the following code into it::

#<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
<div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
<div class="fixed inset-0 transition-opacity">
<div class="absolute inset-0 bg-gray-500 opacity-75"></div>
</div>
<!-- This element is to trick the browser into centering the modal contents. -->
<span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
<div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
<form>
<div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
<div class="">
<div class="mb-4">
<label for="exampleFormControlInput1" class="block mb-2 text-sm font-bold text-gray-700">Title:</label>
<input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
@error('title') <span class="text-red-500">{{ $message }}</span>@enderror
</div>
<div class="mb-4">
<label for="exampleFormControlInput2" class="block mb-2 text-sm font-bold text-gray-700">Description:</label>
<textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="description" placeholder="Enter Description"></textarea>
@error('description') <span class="text-red-500">{{ $message }}</span>@enderror
</div>
</div>
</div>
<div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
<span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
<button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green sm:text-sm sm:leading-5">
Save
</button>
</span>
<span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
<button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
Cancel
</button>
</span>
</div>
</form>
</div>
</div>
</div>


giving credit to  amiryousefi/laravel-permission 
    the code and documentation is on https://github.com/amiryousefi/laravel-permission
