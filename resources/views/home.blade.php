<x-layout>
    <form action="{{ route('todos.store') }}" method="POST" class="flex flex-col space-y-12 justify-between">
        @csrf
        <h1 class="text-4xl font-bold text-blue-900 text-center mb-6">Hi, {{ $username }}!</h1>

        <div class="place-items-center">
            <fieldset class="fieldset bg-base-200 border p-4 border-base-300 rounded-box w-xs">
                <div class="mb-4 flex items-end space-x-2">
                    <div class="flex-1">
                        <label class="block mb-1 font-semibold" for="todo">To-Do</label>
                        <input type="text" name="todo" id="todo" class="input" placeholder="What do you need to do?" required />
                    </div>
                    <button type="submit" class="btn btn-primary h-10">Add</button>
                </div>
                <div>
                    <label class="block mt-2 mb-1 font-semibold" for="category">Category</label>
                    <select name="category" id="category" class="input" required>
                        <option disabled selected>Add a category</option>
                        <option value="Work">Work</option>
                        <option value="Personal">Personal</option>
                        <option value="Shopping">Shopping</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </fieldset>
        </div>
    </form>

    @if(!empty($todos))
        <div class="mt-8 w-1/2 mx-auto">
            <ul class="space-y-4">
                @foreach($todos as $id => $item)
                    <li class="flex justify-between items-center bg-white p-4 rounded shadow">
                        <div>
                            <span class="font-bold {{ !empty($item['done']) && $item['done'] ? 'line-through text-gray-400' : '' }}">
                                {{ $item['todo'] }}
                            </span>
                            <span class="ml-2 px-2 py-1 rounded bg-blue-100 text-blue-800 text-xs">
                                {{ $item['category'] ?? 'Uncategorised' }}
                            </span>
                        </div>

                        @if(isset($editingId) && $editingId == $id)
                            <form action="{{ route('todos.update', $id) }}" method="POST" class="flex flex-1 space-x-2">
                                @csrf
                                @method('POST')
                                <input type="text" name="todo" value="{{ $item['todo'] }}" class="input flex-1" required>
                                <button type="submit" class="btn btn-sm btn-success">Save</button>
                            </form>
                        @else
                            <form action="{{ route('todos.toggle', $id) }}" method="POST" class="flex-1 cursor-pointer">
                                @csrf
                                <button type="submit" class="w-full text-left bg-transparent border-none p-0 m-0
                                    {{ !empty($item['done']) && $item['done'] ? 'line-through text-gray-400' : '' }}">
                                    <span class="font-bold">{{ $item['todo'] }}</span>
                                    <span class="ml-2 px-2 py-1 rounded bg-blue-100 text-blue-800 text-xs">{{ $item['category'] ?? 'Uncategorised' }}</span>
                                </button>
                            </form>
                            <div class="flex space-x-2">
                                <form action="{{ route('todos.edit', $id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-secondary">Edit</button>
                                </form>
                                <form action="{{ route('todo.delete', $id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-error">Delete</button>
                                </form>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>