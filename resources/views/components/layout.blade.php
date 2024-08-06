<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>Pixel-positions</title>
</head>

<body class="bg-black text-white font-hanken pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-5 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="pixel-positions logo">
                </a>
            </div>
            <div class="space-x-5 font-semibold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div class="space-x-2">
                    <a href="/jobs/create">Post a job</a>
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button type="submit">Logout</button>
                    </form>
                </div>
            @endauth
            @guest
                <div class="space-x-2">
                    <a href="/register">Register</a>
                    <a href="/login">Login</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
