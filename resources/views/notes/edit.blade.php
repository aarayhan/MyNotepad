<x-layouts.app title="Edit Note - MyNotepad">
    <div class="mb-6">
        <a href="{{ route('notes.show', $note) }}" class="text-sm text-zinc-600 underline underline-offset-4 hover:text-zinc-950">Back to note</a>
        <h1 class="mt-3 text-3xl font-semibold tracking-tight text-zinc-950">Edit Note</h1>
    </div>

    <div class="rounded-lg border border-zinc-200 bg-white p-6">
        <form method="POST" action="{{ route('notes.update', $note) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="mb-1 block text-sm font-medium text-zinc-800">Title</label>
                <input id="title" name="title" type="text" value="{{ old('title', $note->title) }}" class="w-full rounded-md border border-zinc-300 px-3 py-2 text-sm focus:border-zinc-500 focus:outline-none" required>
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="content" class="mb-1 block text-sm font-medium text-zinc-800">Content</label>
                <textarea id="content" name="content" rows="12" class="w-full rounded-md border border-zinc-300 px-3 py-2 text-sm leading-6 focus:border-zinc-500 focus:outline-none" required>{{ old('content', $note->content) }}</textarea>
                @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-3 sm:flex-row">
                <button type="submit" class="rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800">Save changes</button>
                <a href="{{ route('notes.show', $note) }}" class="rounded-md border border-zinc-300 px-4 py-2 text-center text-sm font-medium text-zinc-700 hover:bg-zinc-100">Cancel</a>
            </div>
        </form>
    </div>
</x-layouts.app>
