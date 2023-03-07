<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class DetailsPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.details-page')->layout('layouts.frontend');
    }
}
