<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    public function index(): View
    {
        // Only show notes that belong to the logged-in user.
        $notes = auth()->user()->notes()->latest('updated_at')->get();

        return view('notes.index', compact('notes'));
    }

    public function create(): View
    {
        return view('notes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'in:Personal,School,Work,Ideas,Other'],
            'content' => ['required', 'string'],
        ]);

        // Creating through the relationship saves the logged-in user's user_id.
        $note = auth()->user()->notes()->create($validated);

        return redirect()->route('notes.show', $note)->with('success', 'Note created successfully.');
    }

    public function show(Note $note): View
    {
        $this->checkNoteOwner($note);

        return view('notes.show', compact('note'));
    }

    public function edit(Note $note): View
    {
        $this->checkNoteOwner($note);

        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note): RedirectResponse
    {
        $this->checkNoteOwner($note);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'in:Personal,School,Work,Ideas,Other'],
            'content' => ['required', 'string'],
        ]);

        $note->update($validated);

        return redirect()->route('notes.show', $note)->with('success', 'Note updated successfully.');
    }

    public function destroy(Note $note): RedirectResponse
    {
        $this->checkNoteOwner($note);

        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully.');
    }

    private function checkNoteOwner(Note $note): void
    {
        // A user must not access notes created by another user.
        abort_if($note->user_id !== auth()->id(), 403);
    }
}
