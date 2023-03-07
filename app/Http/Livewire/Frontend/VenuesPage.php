<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class VenuesPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.venues-page')->layout('layouts.frontend');
    }
}
