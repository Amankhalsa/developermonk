<?php

namespace App\Http\Livewire\Backend;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddEvents extends Component
{
    use WithFileUploads;

    public $club_name , $event_discription,$date,$time,$venue,$crowd,$address,$location,
    $event_thambnail,$event_multi,$ad_service_img,$min_age,$featured,$check_in,
    $check_out,$sp_note,$ad_service_dis,$map;

    public function render()
    {
        return view('livewire.backend.add-events')->layout('layouts.backend');
    }
    protected $rules = [
        'club_name' => 'required',
        'date' => 'required',
        'time' => 'required',
        'venue' => 'required',
//         'address' => 'required',
//         'location'=> 'required',
//         'check_in' => 'required',
//         'check_out' => 'required',

    ];

    protected $messages = [
        'club_name.required' => 'Club name required',

      
      ];
   private function resetInputFields(){
        $this->club_name = '';

        }
public function saveEvent(){
 $this->validate();



Event::create([
        'club_name' => $this->club_name,
        'event_discription' => $this->event_discription,
        'date'=> $this->date,
        'time'=> $this->time,
        'venue' => $this->venue,
        'crowd' => $this->crowd,
        'address' => $this->address,
        'location' => $this->location,
        'event_thambnail' => $this->event_thambnail,
        'event_multi' => $this->event_multi,
        'ad_service_img' => $this->ad_service_img,
        'min_age' => $this->min_age,
        'featured' => $this->featured,
        'check_in' => $this->check_in,
        'check_out' => $this->check_out,
        'sp_note' => $this->sp_note,
        'ad_service_dis' => $this->ad_service_dis,
        'map' => $this->map,
        ]);
        $notification = array(
            'message' => ' Event Published ',
            'alert-type' => 'success'
        );
        return redirect()->route('event_page')->with($notification);
    

}
}
