<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditProfileContoller extends Controller
{
    //
    public function edit_profile(){
        $getUser  = User::where('id',Auth::user()->id)->first();
        return view('backend.profile.edit_profile',compact('getUser'));
    }
    public function updateProfile(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',

           
        ]);
                $Authid  = Auth::user()->id;
                $updateUser  = User::find($Authid);
                $updateUser->name = $request->name;
                $updateUser->email = $request->email;
                $updateUser->phone = $request->phone;
                $updateUser->country = $request->country;
                $updateUser->state = $request->state;
                $updateUser->city = $request->city;
                $updateUser->address = $request->address;
                $updateUser->save();
                $notification = array(
                    'message' => 'Profile Updated ',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);


    }
}
