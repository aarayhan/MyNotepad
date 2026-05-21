<x-layouts.app title="My Notes - MyNotepad">
    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-3xl font-semibold tracking-tight text-zinc-950">My Notes</h1>
            <p class="mt-1 text-sm text-zinc-600">Total notes: {{ $notes->count() }}</p>
        </div>

        <a href="{{ route('notes.create') }}" class="rounded-md bg-zinc-900 px-4 py-2 text-center text-sm font-medium text-white hover:bg-zinc-800">
            New Note
        </a>
    </div>

    @if ($notes->isEmpty())
        <div class="rounded-lg border border-dashed border-zinc-300 bg-white p-8 text-center">
            <p class="text-zinc-700">No notes yet. Create your first note to get started.</p>
            <a href="{{ route('notes.create') }}" class="mt-4 inline-block rounded-md border border-zinc-300 px-4 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-100">
                Create your first note
            </a>
        </div>
    @else
        <div class="grid gap-4 sm:grid-cols-2">
            @foreach ($notes as $note)
                <article class="rounded-lg border border-zinc-200 bg-white p-5">
                    <h2 class="mb-2 text-lg font-semibold text-zinc-950">{{ $note->title }}</h2>
                    <p class="mb-4 min-h-12 text-sm leading-6 text-zinc-600">
                        {{ \Illuminate\Support\Str::limit($note->content, 120) }}
                    </p>
                    <p class="mb-4 text-xs text-zinc-500">Updated {{ $note->updated_at->format('M d, Y') }}</p>

                    <div class="flex flex-wrap gap-2 text-sm">
                        <a href="{{ route('notes.show', $note) }}" class="rounded-md border border-zinc-300 px-3 py-2 text-zinc-700 hover:bg-zinc-100">View</a>
                        <a href="{{ route('notes.edit', $note) }}" class="rounded-md border border-zinc-300 px-3 py-2 text-zinc-700 hover:bg-zinc-100">Edit</a>
                        <form method="POST" action="{{ route('notes.destroy', $note) }}" onsubmit="return confirm('Delete this note?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-md border border-red-200 px-3 py-2 text-red-700 hover:bg-red-50">Delete</button>
                        </form>
                    </div>
                </article>
            @endforeach
        </div>
    @endif
</x-layouts.app>
