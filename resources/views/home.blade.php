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
            </fieldset>
        </div>
    </form>

    @if(!empty($todos))
        <div class="mt-8 w-1/2 mx-auto">
            <ul class="space-y-4">
                @foreach($todos as $id => $item)
                    <li class="flex justify-between items-center bg-white p-4 rounded shadow">
                        <span>{{ $item['todo'] }}</span>
                        <div class="space-x-2">
                            <button class="btn btn-sm btn-secondary" disabled>Edit</button>
                            <form action="{{ route('todo.delete', $id) }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-error">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>