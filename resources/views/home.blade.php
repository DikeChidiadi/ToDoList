<x-layout>
    <form action="home" methode="post" class="flex flex-col space-y-12 justify-between">
        @csrf
        <div class="absolute top-0 right-0 p-2 mr-8">
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

        <div class="place-items-center flex flex-col border-2 border-gray-300">
            <div class="flex flex-col border-2 border-gray-300 rounded-full p-6 bg-white shadow-md mt-8 mb-8 w-96">
                <div class="flex flex-col rounded-full p-6 bg-blue-500 w-10 m-auto" src="{{ asset('img/plus.webp') }}" alt="plus">
                    
                </div>
            </div>
        </div>
    </form>
    
</x-layout>