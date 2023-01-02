<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\User;

class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function updatingSearch()

    {

        $this->resetPage();

    }

    public function render()
    {
        return view('livewire.users.index',[ 
            'voters' => User::where('name', 'like', '%'.$this->search.'%')->paginate(10),
        ]);
    }
}
