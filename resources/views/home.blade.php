<x-layout>
    <form action="home" methode="post" class="flex flex-col space-y-12 justify-between">
        @csrf
        <div class="absolute border-2 border-rose-800 top-2 right-0 p-2 mr-8">
            <ul class="menu menu-horizontal px-1">
            <li>
                <details>
                @auth
                <summary>Hi, {{ Auth::user()->name }}</summary>
                @endauth
                <ul class="bg-base-100 rounded-t-none p-2">
                    <li><a>Logout</a></li>
                </ul>
                </details>
            </li>
            </ul>
        </div>
    
        <div class="place-items-center flex flex-col md:flex-1 border-2 border-gray-300 p-8">
                <input type="text" name="input" id="input" placeholder="Enter your task" class="border-2 border-gray-300 rounded-full p-2 w-80" />
                <div>
                    <button class="flex flex-col right-177 top-38 rounded-xl p-6 bg-blue-500 w-20 h-10 float-right hover:border-4 border-rose-800" src="{{ asset('img/plus.webp') }}" alt="plus" style="position: absolute;">Add</button>
                </div>
        </div>
    </form>
</x-layout>