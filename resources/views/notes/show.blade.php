<x-layouts.app title="{{ $note->title }} - MyNPad">
    @php
        $categoryClass = [
            'Personal' => 'border-stone-200 bg-stone-50 text-stone-700',
            'School' => 'border-amber-200 bg-amber-50 text-amber-800',
            'Work' => 'border-sky-200 bg-sky-50 text-sky-800',
            'Ideas' => 'border-emerald-200 bg-emerald-50 text-emerald-800',
            'Other' => 'border-zinc-200 bg-zinc-50 text-zinc-700',
        ][$note->category] ?? 'border-zinc-200 bg-zinc-50 text-zinc-700';
    @endphp

    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
        <div>
            <a href="{{ route('notes.index') }}" class="text-sm text-zinc-600 underline underline-offset-4 hover:text-zinc-950">Back to notes</a>
            <h1 class="mt-3 text-3xl font-semibold tracking-tight text-zinc-950">{{ $note->title }}</h1>
            <div class="mt-2 flex flex-wrap items-center gap-2 text-sm text-zinc-500">
                <span class="rounded-full border px-2.5 py-1 text-xs {{ $categoryClass }}">{{ $note->category }}</span>
                <span>Updated {{ $note->updated_at->format('M d, Y') }}</span>
            </div>
        </div>

        <div class="flex gap-2">
            <a href="{{ route('notes.edit', $note) }}" class="rounded-lg border border-stone-300 bg-white px-3 py-2 text-sm text-zinc-700 hover:bg-stone-100">Edit</a>
            <form method="POST" action="{{ route('notes.destroy', $note) }}" onsubmit="return confirm('Delete this note?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded-lg border border-red-200 px-3 py-2 text-sm text-red-700 hover:bg-red-50">Delete</button>
            </form>
        </div>
    </div>

    <article class="whitespace-pre-wrap rounded-2xl border border-stone-200 bg-[#fffdf8] p-6 leading-7 text-zinc-800 shadow-sm shadow-stone-300/40">{{ $note->content }}</article>
</x-layouts.app>
