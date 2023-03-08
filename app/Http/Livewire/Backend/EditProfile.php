<?php

namespace App\Http\Livewire\Backend;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProfile extends Component
{
    use WithFileUploads;
    public $uid, $profile_photo, $getUser ,$name ,$email ,$phone ,$country ,$state ,$city ,$address ,$profile_photo_path ;

    public function mount(){
        $this->getUser  = User::where('id',Auth::user()->id)->first();
        $this->uid = $this->getUser->id;
        $this->name = $this->getUser->name;
        $this->email = $this->getUser->email;
        $this->phone = $this->getUser->phone;
        $this->country = $this->getUser->country;
        $this->state = $this->getUser->state;
        $this->city = $this->getUser->city;
        $this->address = $this->getUser->address;
        $this->profile_photo_path = $this->getUser->profile_photo_path;


        
    }
    public function render()
    {        
        return view('livewire.backend.edit-profile')->layout('layouts.backend');
    }

    public function updateProfile(){

        User::where('id', $this->uid )->update([
            'name' => $this->name,
            'email' =>    $this->email,
            'phone' =>    $this->phone,
            'country' =>    $this->country,
            'state' =>    $this->state,
            'city' =>    $this->city,
            'address' =>    $this->address,
            ]);
            $notification = array(
                'message' => 'Profile Updated ',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

    }

    public function updateProfilePic(){

        if($this->profile_photo){
            $fileName = time().'_'. $this->profile_photo->getClientOriginalName();
            $filePath = $this->profile_photo->storeAs('profile', $fileName, 'public');
            // $imagePath = Storage::path('public/profile/'. $this->profile_photo_path);
            // if(File::exists($imagePath)){
            //         unlink($imagePath);
            //     }
        User::where('id', $this->uid )->update([
            'profile_photo_path' =>     $fileName ,
            ]);
       
            $notification = array(
                'message' => 'Profile Updated ',
                'alert-type' => 'success'
            );
            return redirect()->route('admin_ProfileEdit')->with($notification);
        }else{
            $notification = array(
                'message' => 'Not Profile Updated ',
                'alert-type' => 'error'
            );
            return redirect()->route('admin_ProfileEdit')->with($notification);

        }
    }
}
