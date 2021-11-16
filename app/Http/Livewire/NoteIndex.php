<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;
use Livewire\WithPagination;

class NoteIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'noteCreated'
    ];

    public function noteCreated($note)
    {
        session()->flash('message', '留言创建成功！');
    }

    public function render()
    {
        return view('livewire.note-index', [
            'notes' => Note::latest()->paginate(5)
        ]);
    }
}
