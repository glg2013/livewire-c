<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NoteCreate extends Component
{
    public $content;

    public function createNote()
    {
        $this->validate([
            'content' => 'required|min:6'
        ]);

        if (Auth::check()) {
            $note = Auth::user()->notes()->create([
                'content' => $this->content
            ]);

            $this->content = '';

            $this->emit('noteCreated', $note);
        }
    }

    public function render()
    {
        return view('livewire.note-create');
    }
}
