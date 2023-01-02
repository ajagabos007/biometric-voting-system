<?php

namespace App\Http\Livewire\Elections;

use Livewire\Component;
use App\Models\Election;


class Show extends Component
{
    
     /**
     * The Election.
     *
     * @var \App\Models\Election
     */
    public Election $election;

    
    public function render()
    {
        return view('livewire.elections.show');
    }

    public function mount(Election $election){
        $this->election = $election;
    }
}
