<?php

namespace App\Http\Livewire\Backend;

use App\Models\Event;
use Livewire\Component;

class ManageEvents extends Component
{
    public $getevents;
   public function mount(){
            $this->getevents =    Event::get();
   }
    public function render()
    {
        return view('livewire.backend.manage-events')->layout('layouts.backend');
    }


   
}
