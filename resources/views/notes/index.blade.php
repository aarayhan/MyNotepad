<x-layouts.app title="My Notes - MyNPad">
    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-3xl font-semibold tracking-tight text-zinc-950">My Notes</h1>
            <p class="mt-1 text-sm text-zinc-600">Total notes: {{ $notes->count() }}</p>
        </div>

        <a href="{{ route('notes.create') }}" class="rounded-lg bg-emerald-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-emerald-800">
            New Note
        </a>
    </div>

    @if ($notes->isEmpty())
        <div class="rounded-2xl border border-dashed border-emerald-200 bg-[#fffdf8] p-8 text-center shadow-sm shadow-stone-300/30">
            <p class="text-zinc-700">No notes yet. Create your first note to get started.</p>
            <a href="{{ route('notes.create') }}" class="mt-4 inline-block rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-2 text-sm font-medium text-emerald-800 hover:bg-emerald-100">
                Create your first note
            </a>
        </div>
    @else
        <div class="grid gap-4 sm:grid-cols-2">
            @foreach ($notes as $note)
                @php
                    $categoryClass = [
                        'Personal' => 'border-stone-200 bg-stone-50 text-stone-700',
                        'School' => 'border-amber-200 bg-amber-50 text-amber-800',
                        'Work' => 'border-sky-200 bg-sky-50 text-sky-800',
                        'Ideas' => 'border-emerald-200 bg-emerald-50 text-emerald-800',
                        'Other' => 'border-zinc-200 bg-zinc-50 text-zinc-700',
                    ][$note->category] ?? 'border-zinc-200 bg-zinc-50 text-zinc-700';
                @endphp

                <article class="rounded-2xl border border-stone-200 bg-[#fffdf8] p-5 shadow-sm shadow-stone-300/30 transition hover:border-emerald-200 hover:shadow-stone-300/50">
                    <div class="mb-3 flex items-start justify-between gap-3">
                        <h2 class="text-lg font-semibold text-zinc-950">{{ $note->title }}</h2>
                        <span class="rounded-full border px-2.5 py-1 text-xs {{ $categoryClass }}">{{ $note->category }}</span>
                    </div>
                    <p class="mb-4 min-h-12 text-sm leading-6 text-zinc-600">
                        {{ \Illuminate\Support\Str::limit($note->content, 120) }}
                    </p>
                    <p class="mb-4 text-xs text-zinc-500">Updated {{ $note->updated_at->format('M d, Y') }}</p>

                    <div class="flex flex-wrap gap-2 text-sm">
                        <a href="{{ route('notes.show', $note) }}" class="rounded-lg border border-stone-300 bg-white px-3 py-2 text-zinc-700 hover:bg-stone-100">View</a>
                        <a href="{{ route('notes.edit', $note) }}" class="rounded-lg border border-stone-300 bg-white px-3 py-2 text-zinc-700 hover:bg-stone-100">Edit</a>
                        <form method="POST" action="{{ route('notes.destroy', $note) }}" onsubmit="return confirm('Delete this note?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-lg border border-red-200 px-3 py-2 text-red-700 hover:bg-red-50">Delete</button>
                        </form>
                    </div>
                </article>
            @endforeach
        </div>
    @endif
</x-layouts.app>
