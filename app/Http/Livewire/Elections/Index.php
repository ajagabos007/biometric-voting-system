<?php

namespace App\Http\Livewire\Elections;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Election;

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
        return view('livewire.elections.index',[ 
            'elections' => Election::where('start_time', 'like', '%'.$this->search.'%')->paginate(2),
        ]);
    }

    

}
