<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\MultiplePic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
                $fileName = time().'.'. $event_pic->getClientOriginalExtension();
                $filePath = $event_pic->storeAs('events', $fileName, 'public');
            }
            
            $ad_service_pic =  $request->file('ad_service_img');
            if($ad_service_pic){
                $fileName2 = time().'.'. $ad_service_pic->getClientOriginalExtension();
                $filePath2 = $ad_service_pic->storeAs('add_service',  $fileName2, 'public');
            }
             $saveEvent = Event::create([
                'club_name' => $request->club_name,
                'event_discription' => $request->event_discription,
                'date'=> date('Y-m-d', strtotime($request->date))    ,
                'time'=> $request->time,
                'venue' => $request->venue,
                'crowd' => $request->crowd,
                'address' => $request->address,
                'location' => $request->location,
                'event_thambnail' => $fileName,
                'ad_service_img' => $fileName2,
                'min_age' => $request->min_age,
                'featured' => $request->featured,
                'check_in' => $request->check_in,
                'check_out' => $request->check_out,
                'sp_note' => $request->sp_note,
                'ad_service_dis' => $request->ad_service_dis,
                'map' => $request->map,
            ]);

            $images = $request->file('multi_pic');
            if($images)  
            {
                foreach ($images as  $eventpic) 
                {
                $multipic = time().'.'.$eventpic->getClientOriginalExtension();
                $filePath2 = $eventpic->storeAs('multipic', $multipic, 'public');
                    $savepic = new MultiplePic();
                    $savepic->event_id = $saveEvent->id;
                    $savepic->multipic =  $multipic;
                    $savepic->save();

                }
      
            }

            $notification = array(
                'message' => ' Event Published ',
                'alert-type' => 'success'
            );
            return redirect()->route('admin_view_events')->with($notification);
            
    }

        public function delete_event($id){
            $getimg  = Event::find($id);
            $imagePath = Storage::path('public/events/'. $getimg->event_thambnail);
            $imagePath2 = Storage::path('public/add_service/'. $getimg->ad_service_img);
 
            if(File::exists($imagePath) && $getimg->event_thambnail){
                  unlink($imagePath);
                  unlink($imagePath2);

            }

                $deleteevent =    Event::find($id);
                $deleteevent->delete();
                $notification = array(
                    'message' => ' Event deleted ',
                    'alert-type' => 'error'
                );
                return redirect()->route('admin_view_events')->with($notification);
        }

}
