<?php

namespace App\Http\Livewire\Admin;

use App\Models\Album;
use Livewire\Component;
use Livewire\WithPagination;

class AlbumIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $album = Album::all();//->paginate(10);

        return view('livewire.admin.album-index', compact('album'));
    }
}
