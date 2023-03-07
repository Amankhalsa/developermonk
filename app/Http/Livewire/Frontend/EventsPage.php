<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class EventsPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.events-page')->layout('layouts.frontend');
    }
}
