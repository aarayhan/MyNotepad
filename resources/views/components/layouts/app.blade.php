<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'MyNotepad' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-zinc-50 text-zinc-900 antialiased">
    <header class="border-b border-zinc-200 bg-white">
        <div class="mx-auto flex max-w-5xl flex-col gap-4 px-4 py-4 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ auth()->check() ? route('notes.index') : url('/') }}" class="text-lg font-semibold tracking-tight text-zinc-950">
                MyNotepad
            </a>

            @auth
                <div class="flex flex-col gap-3 text-sm sm:flex-row sm:items-center">
                    <span class="text-zinc-600">{{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="rounded-md border border-zinc-300 px-3 py-2 text-zinc-700 hover:bg-zinc-100">
                            Logout
                        </button>
                    </form>
                </div>
            @else
                <nav class="flex gap-2 text-sm">
                    <a href="{{ route('login') }}" class="rounded-md border border-zinc-300 px-3 py-2 text-zinc-700 hover:bg-zinc-100">Login</a>
                    <a href="{{ route('register') }}" class="rounded-md bg-zinc-900 px-3 py-2 text-white hover:bg-zinc-800">Register</a>
                </nav>
            @endauth
        </div>
    </header>

    <main class="mx-auto max-w-5xl px-4 py-8">
        @if (session('success'))
            <div class="mb-6 rounded-md border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                {{ session('success') }}
            </div>
        @endif

        {{ $slot }}
    </main>
</body>
</html>
