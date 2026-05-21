<x-layouts.app title="Register - MyNPad">
    <div class="mx-auto max-w-md rounded-2xl border border-stone-200 bg-[#fffdf8] p-6 shadow-sm shadow-stone-300/40">
        <h1 class="mb-2 text-2xl font-semibold text-zinc-950">Create account</h1>
        <p class="mb-6 text-sm text-zinc-600">Register to start writing your own notes.</p>

        <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="mb-1 block text-sm font-medium text-zinc-800">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" class="w-full rounded-md border border-stone-300 bg-white px-3 py-2 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100" required>
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="mb-1 block text-sm font-medium text-zinc-800">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" class="w-full rounded-md border border-stone-300 bg-white px-3 py-2 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100" required>
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="mb-1 block text-sm font-medium text-zinc-800">Password</label>
                <input id="password" name="password" type="password" class="w-full rounded-md border border-stone-300 bg-white px-3 py-2 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100" required>
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="mb-1 block text-sm font-medium text-zinc-800">Confirm password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="w-full rounded-md border border-stone-300 bg-white px-3 py-2 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100" required>
            </div>

            <button type="submit" class="w-full rounded-lg bg-emerald-700 px-4 py-2 text-sm font-medium text-white hover:bg-emerald-800">
                Register
            </button>
        </form>

        <p class="mt-5 text-center text-sm text-zinc-600">
            Already have an account?
            <a href="{{ route('login') }}" class="font-medium text-zinc-950 underline underline-offset-4">Login</a>
        </p>
    </div>
</x-layouts.app>
