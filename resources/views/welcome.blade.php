<x-layouts.app title="MyNotepad">
    <section class="grid gap-8 md:grid-cols-[1.2fr_0.8fr] md:items-start">
        <div class="rounded-lg border border-zinc-200 bg-white p-6 sm:p-8">
            <p class="mb-3 text-sm font-medium text-zinc-500">School final project</p>
            <h1 class="mb-4 text-3xl font-semibold tracking-tight text-zinc-950 sm:text-4xl">MyNotepad</h1>
            <p class="mb-6 max-w-xl text-base leading-7 text-zinc-700">
                Write and manage your personal notes in one place.
            </p>
            <div class="flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('register') }}" class="rounded-md bg-zinc-900 px-4 py-2 text-center text-sm font-medium text-white hover:bg-zinc-800">
                    Register
                </a>
                <a href="{{ route('login') }}" class="rounded-md border border-zinc-300 px-4 py-2 text-center text-sm font-medium text-zinc-700 hover:bg-zinc-100">
                    Login
                </a>
            </div>
        </div>

        <div class="rounded-lg border border-zinc-200 bg-white p-6">
            <h2 class="mb-4 text-lg font-semibold text-zinc-950">App flow</h2>
            <ol class="space-y-4 text-sm text-zinc-700">
                <li class="rounded-md border border-zinc-200 bg-zinc-50 p-3">1. Create an account with your name, email, and password.</li>
                <li class="rounded-md border border-zinc-200 bg-zinc-50 p-3">2. Login to open your notes dashboard.</li>
                <li class="rounded-md border border-zinc-200 bg-zinc-50 p-3">3. Create, view, edit, and delete your own notes.</li>
            </ol>
        </div>
    </section>
</x-layouts.app>
