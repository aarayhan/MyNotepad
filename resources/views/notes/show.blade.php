<x-layouts.app title="{{ $note->title }} - MyNPad">
    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
        <div>
            <a href="{{ route('notes.index') }}" class="text-sm text-zinc-600 underline underline-offset-4 hover:text-zinc-950">Back to notes</a>
            <h1 class="mt-3 text-3xl font-semibold tracking-tight text-zinc-950">{{ $note->title }}</h1>
            <p class="mt-1 text-sm text-zinc-500">Updated {{ $note->updated_at->format('M d, Y') }}</p>
        </div>

        <div class="flex gap-2">
            <a href="{{ route('notes.edit', $note) }}" class="rounded-lg border border-zinc-300 px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-100">Edit</a>
            <form method="POST" action="{{ route('notes.destroy', $note) }}" onsubmit="return confirm('Delete this note?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded-lg border border-red-200 px-3 py-2 text-sm text-red-700 hover:bg-red-50">Delete</button>
            </form>
        </div>
    </div>

    <article class="whitespace-pre-wrap rounded-2xl border border-zinc-200 bg-white p-6 leading-7 text-zinc-800 shadow-sm shadow-zinc-200/40">{{ $note->content }}</article>
</x-layouts.app>
