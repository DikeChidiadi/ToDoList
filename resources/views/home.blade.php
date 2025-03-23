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

        <div class="place-items-center">
            <div>
                <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
                    <table class="table">
                        <!-- head -->
                        <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Favorite Color</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row 1 -->
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Blue</td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <th>2</th>
                            <td>Hart Hagerty</td>
                            <td>Desktop Support Technician</td>
                            <td>Purple</td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <th>3</th>
                            <td>Brice Swyre</td>
                            <td>Tax Accountant</td>
                            <td>Red</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
    
</x-layout>