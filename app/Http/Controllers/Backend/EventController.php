<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function viewEvents(){
        $getevents =    Event::get();
        return view('backend.event.index',compact('getevents'));

    } 

    public function addEvents(Request $request){
        $validated = $request->validate([
            'club_name' => 'required|max:255',
            'date' => 'required',
            'time' => 'required',
            ]);
            $event_pic =  $request->file('event_thambnail');
            if($event_pic){
                $fileName = time().'_'. $event_pic->getClientOriginalName();
                $filePath = $event_pic->storeAs('events', $fileName, 'public');
            }
         
        Event::create([
            'club_name' => $request->club_name,
            'event_discription' => $request->event_discription,
            'date'=> $request->date,
            'time'=> $request->time,
            'venue' => $request->venue,
            'crowd' => $request->crowd,
            'address' => $request->address,
            'location' => $request->location,
            'event_thambnail' => $fileName,
            'event_multi' => $request->event_multi,
            'ad_service_img' => $request->ad_service_img,
            'min_age' => $request->min_age,
            'featured' => $request->featured,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'sp_note' => $request->sp_note,
            'ad_service_dis' => $request->ad_service_dis,
            'map' => $request->map,
            ]);
            $notification = array(
                'message' => ' Event Published ',
                'alert-type' => 'success'
            );
            return redirect()->route('admin_view_events')->with($notification);
            
    }

}
