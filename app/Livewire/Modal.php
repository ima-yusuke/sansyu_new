<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Interview;

class Modal extends Component
{
    public $selectedEmployee;

    public $interviews;


    public function openModal($id){
        $this->selectedEmployee = Interview::find($id);

    }

    public function closeModal()
    {
        $this->selectedEmployee = null;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
