<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class ManageEvents extends Component
{
    public function render()
    {
        return view('livewire.backend.manage-events')->layout('layouts.backend');
    }
}
