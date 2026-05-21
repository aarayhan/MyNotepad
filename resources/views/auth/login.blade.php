<x-layouts.app title="Login - MyNPad">
    <div class="mx-auto max-w-md rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm shadow-zinc-200/40">
        <h1 class="mb-2 text-2xl font-semibold text-zinc-950">Login</h1>
        <p class="mb-6 text-sm text-zinc-600">Login to manage your notes.</p>

        <form method="POST" action="{{ route('login.store') }}" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="mb-1 block text-sm font-medium text-zinc-800">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" class="w-full rounded-md border border-zinc-300 px-3 py-2 text-sm focus:border-zinc-500 focus:outline-none" required>
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="mb-1 block text-sm font-medium text-zinc-800">Password</label>
                <input id="password" name="password" type="password" class="w-full rounded-md border border-zinc-300 px-3 py-2 text-sm focus:border-zinc-500 focus:outline-none" required>
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800">
                Login
            </button>
        </form>

        <p class="mt-5 text-center text-sm text-zinc-600">
            Need an account?
            <a href="{{ route('register') }}" class="font-medium text-zinc-950 underline underline-offset-4">Register</a>
        </p>
    </div>
</x-layouts.app>
