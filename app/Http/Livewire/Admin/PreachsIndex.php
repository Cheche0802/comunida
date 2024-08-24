<?php

namespace App\Http\Livewire\Admin;

use App\Models\Preach;
use Livewire\Component;
use Livewire\WithPagination;

class PreachsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $preachs = Preach::where('user_id', auth()->user()->id)
        ->where('name', 'LIKE', '%'. $this->search. '%')
        ->latest('id')->paginate(10);

        return view('livewire.admin.preachs-index', compact('preachs'));
    }
}
