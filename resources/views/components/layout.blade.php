<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pixel position</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-black text-white font-hanken">
    <header class="font-medium px-10">
        <nav class="flex justify-between items-center py-3 ">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-2.5">
                <a href="#">Jobs</a>
                <a href="#">Career</a>
                <a href="#">Salary</a>
                <a href="#">Company</a>
            </div>
            @auth
                <div class="flex items-center gap-x-4">
                    <a href="/jobs/create">Post job</a>
                    <form action="/logout" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-800 cursor-pointer font-bold">Log Out</button>
                    </form>
                </div>
            @endauth
            @guest
                <div class="space-x-2.5">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>
    </header>
    <div class="px-10 mb-10">
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
