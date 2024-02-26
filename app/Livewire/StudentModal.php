<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class StudentModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.student-modal');
    }
}
