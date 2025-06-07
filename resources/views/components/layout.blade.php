<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To-Do List</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <body class="min-h-screen flex flex-col bg-blue-100">
        <div class="pt-5 text-3xl text-center font-bold font-mono tracking-wide text-white bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% h-20">
            <p>To-Do List</p>
        </div>
        
        <div class="flex justify-center mt-10 flex-1">
            <div class="w-1/2">
                {{ $slot }}
            </div>
        </div>

        <footer class="footer sm:footer-horizontal footer-center text-white bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% p-4">
            <aside>
                <p>Copyright © {{ date('Y') }} - All right reserved by Chidiadi Dike</p>
            </aside>
        </footer>
    </body>
</html>
