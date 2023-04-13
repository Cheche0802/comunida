<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class UseresIndex extends Component
{
    use  WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'LIKE', '%'. $this->search. '%')
                        ->orWhere('email',  'LIKE', '%'. $this->search. '%')
        ->latest('id')->paginate(10);

        return view('livewire.admin.useres-index', compact('users'));
    }
}
