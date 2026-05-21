<x-layouts.app title="Edit Note - MyNPad">
    <div class="mb-6">
        <a href="{{ route('notes.show', $note) }}" class="text-sm text-zinc-600 underline underline-offset-4 hover:text-zinc-950">Back to note</a>
        <h1 class="mt-3 text-3xl font-semibold tracking-tight text-zinc-950">Edit Note</h1>
    </div>

    <div class="rounded-2xl border border-stone-200 bg-[#fffdf8] p-6 shadow-sm shadow-stone-300/40">
        <form method="POST" action="{{ route('notes.update', $note) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="mb-1 block text-sm font-medium text-zinc-800">Title</label>
                <input id="title" name="title" type="text" value="{{ old('title', $note->title) }}" class="w-full rounded-md border border-stone-300 bg-white px-3 py-2 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100" required>
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="category" class="mb-1 block text-sm font-medium text-zinc-800">Category</label>
                <select id="category" name="category" class="w-full rounded-md border border-stone-300 bg-white px-3 py-2 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100" required>
                    @foreach (['Personal', 'School', 'Work', 'Ideas', 'Other'] as $category)
                        <option value="{{ $category }}" @selected(old('category', $note->category) === $category)>{{ $category }}</option>
                    @endforeach
                </select>
                @error('category')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="content" class="mb-1 block text-sm font-medium text-zinc-800">Content</label>
                <textarea id="content" name="content" rows="12" class="w-full rounded-md border border-stone-300 bg-white px-3 py-2 text-sm leading-6 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100" required>{{ old('content', $note->content) }}</textarea>
                @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-3 sm:flex-row">
                <button type="submit" class="rounded-lg bg-emerald-700 px-4 py-2 text-sm font-medium text-white hover:bg-emerald-800">Save changes</button>
                <a href="{{ route('notes.show', $note) }}" class="rounded-lg border border-stone-300 bg-white px-4 py-2 text-center text-sm font-medium text-zinc-700 hover:bg-stone-100">Cancel</a>
            </div>
        </form>
    </div>
</x-layouts.app>
