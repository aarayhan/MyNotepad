<x-layouts.app title="MyNPad">
    <section class="grid gap-8 py-6 md:grid-cols-[1.05fr_0.95fr] md:items-center md:py-12">
        <div>
            <p class="mb-4 text-sm font-medium text-emerald-800">Personal notes, kept simple</p>

            <h1 class="max-w-2xl text-4xl font-semibold tracking-tight text-zinc-950 sm:text-5xl">
                A clean place to write your everyday notes.
            </h1>

            <p class="mt-5 max-w-xl text-base leading-7 text-zinc-700">
                MyNotepad helps you save short notes, school reminders, ideas, and personal writing in one organized place.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('register') }}" class="rounded-lg bg-emerald-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-emerald-800">
                    Start writing
                </a>
                <a href="{{ route('login') }}" class="rounded-lg border border-stone-300 bg-white px-5 py-2.5 text-center text-sm font-medium text-zinc-700 hover:bg-stone-100">
                    Login
                </a>
            </div>
        </div>

        <div class="rounded-2xl border border-stone-200 bg-[#fffdf8] p-5 shadow-sm shadow-stone-300/40">
            <div class="mb-5 flex items-center justify-between border-b border-stone-200 pb-4">
                <div>
                    <p class="text-sm font-semibold text-zinc-950">My Notes</p>
                    <p class="mt-1 text-xs text-zinc-500">Simple dashboard preview</p>
                </div>
                <span class="rounded-lg border border-emerald-200 bg-emerald-50 px-2.5 py-1 text-xs text-emerald-800">2 notes</span>
            </div>

            <div class="space-y-3">
                <div class="rounded-xl border border-amber-200 bg-amber-50/70 p-4">
                    <div class="mb-3 flex items-start justify-between gap-3">
                        <p class="text-sm font-medium text-zinc-950">Class reminders</p>
                        <span class="text-xs text-zinc-500">Today</span>
                    </div>
                    <p class="text-sm leading-6 text-zinc-600">Bring the printed report and prepare the short presentation notes.</p>
                </div>

                <div class="rounded-xl border border-stone-200 bg-white p-4">
                    <div class="mb-3 flex items-start justify-between gap-3">
                        <p class="text-sm font-medium text-zinc-950">Weekend list</p>
                        <span class="text-xs text-zinc-500">Yesterday</span>
                    </div>
                    <p class="text-sm leading-6 text-zinc-600">Finish homework, clean the desk, and review database relationships.</p>
                </div>
            </div>

            <div class="mt-5 rounded-xl border border-dashed border-emerald-200 bg-emerald-50/50 p-4 text-sm text-zinc-700">
                Create a note, update it when needed, or remove it when it is no longer useful.
            </div>
        </div>
    </section>

    <section class="mt-8 grid gap-4 sm:grid-cols-3">
        <div class="rounded-xl border border-stone-200 bg-[#fffdf8] p-5 shadow-sm shadow-stone-300/30">
            <h2 class="font-semibold text-emerald-900">Write</h2>
            <p class="mt-2 text-sm leading-6 text-zinc-600">Add notes with a clear title and comfortable writing area.</p>
        </div>

        <div class="rounded-xl border border-stone-200 bg-[#fffdf8] p-5 shadow-sm shadow-stone-300/30">
            <h2 class="font-semibold text-emerald-900">Manage</h2>
            <p class="mt-2 text-sm leading-6 text-zinc-600">View your notes, edit the content, and keep the list updated.</p>
        </div>

        <div class="rounded-xl border border-stone-200 bg-[#fffdf8] p-5 shadow-sm shadow-stone-300/30">
            <h2 class="font-semibold text-emerald-900">Private</h2>
            <p class="mt-2 text-sm leading-6 text-zinc-600">Your account only shows notes that belong to you.</p>
        </div>
    </section>

    <section class="mt-8 rounded-2xl border border-emerald-200 bg-emerald-50/70 p-6 text-center shadow-sm shadow-stone-300/40 sm:p-8">
        <h2 class="text-2xl font-semibold tracking-tight text-zinc-950">Ready to make your first note?</h2>
        <p class="mx-auto mt-3 max-w-xl text-sm leading-6 text-zinc-600">
            Create an account and start keeping your notes in one simple workspace.
        </p>
        <a href="{{ route('register') }}" class="mt-6 inline-block rounded-lg bg-emerald-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-emerald-800">
            Create Account
        </a>
    </section>
</x-layouts.app>
