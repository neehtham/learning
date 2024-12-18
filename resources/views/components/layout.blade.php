<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} class= h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav display="desktop" href="/" :active="request()->is('/')">Home</x-nav>
                                <x-nav display="desktop" href="/login" :active="request()->is('login')">Login</x-nav>
                                <x-nav display="desktop" href="/jobs" :active="request()->is('jobs')"> Jobs</x-nav>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        @guest
                            <x-nav href="/login" :active="request()->is('login')">Log In</x-nav>
                            <x-nav href="/register" :active="request()->is('register')">Register</x-nav>
                        @endguest
                        @auth
                            <form method="POST" action="logout">
                                @csrf
                                <x-form-buttons> Log out </x-form-buttons>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
    </div>
    </div>

    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <x-nav display="mobile" href="/" :active="request()->is('/')">Home</x-nav>
            <x-nav display="mobile" href="/login" :active="request()->is('login')">Login</x-nav>
            <x-nav display="mobile" href="/jobs" :active="request()->is('jobs')">Jobs</x-nav>
        </div>
        <div>
            @guest
                <x-nav href="/login" :active="request()->is('login')">Log In</x-nav>
                <x-nav href="/register" :active="request()->is('register')">Register</x-nav>
            @endguest
        </div>
    </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            @auth
                <x-buttons href='/jobs/create'> Create a job </x-buttons>
            @endauth
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
    </div>

</body>

</html>
