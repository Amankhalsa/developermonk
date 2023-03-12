


@extends('layouts.backend')
@section('title', 'Edit Profile')
@section('content')
<div class="row main main-app p-3 p-lg-4">
    <div class="col-md-6">
        <div class="col-xl">
            <div class="media-profile mb-5">
              <div class="media-img mb-3 mb-sm-0">
                <img src="{{ isset(Auth::user()->profile_photo_path ) ? asset('storage/profile/'. Auth::user()->profile_photo_path)  : asset('no_image.jpg') }}" class="img-fluid" alt="...">
              </div><!-- media-img -->
              <div class="media-body">
               
                <h5 class="media-name">  <i class="ri-account-circle-fill"></i> {{isset(Auth::user()->name) ? ucwords(Auth::user()->name) : "NA"}}</h5>
                <p class="d-flex gap-2 mb-4">
                   
                    {{isset(Auth::user()->email) ? ucwords(Auth::user()->email) : "NA"}}</p>
                <p class="mb-0 py-2">Phone :
                     {{isset(Auth::user()->phone) ? ucwords(Auth::user()->phone) : "NA"}} </p>

                <p class="mb-0  py-2">Country :  {{isset(Auth::user()->country) ? ucwords(Auth::user()->country) : "NA"}}</p>
                <p class="mb-0  py-2">City : {{isset(Auth::user()->city) ? ucwords(Auth::user()->city) : "NA"}}  </p>
                <p class="mb-0  py-2">Address : {{isset(Auth::user()->address) ? ucwords(Auth::user()->address) : "NA"}}</p>

                <form  wire:submit.prevent="updateProfilePic" enctype="multipart/form-data">


               <div class="mb-3 mt-3">
                   <label for="formFile" class="form-label">Update Profile picture</label>
                   <input class="form-control" type="file" wire:model="profile_photo"  id="formFile">
                </div>
           
                        <button type="submit" wire:loading.attr="disabled"  class="btn btn-primary">Save</button>
            </form>
            </div><!-- media-body -->
            </div><!-- media-profile -->
 

  
            <div class="card card-post mt-4">
              <div class="card-header">
                <h6 class="card-title">Interests</h6>
                <a href="" class="link-more"><i class="ri-more-2-fill"></i></a>
              </div><!-- card-header -->
              <div class="card-body">
                <div class="interest-item">
                  <div class="interest-icon bg-dark"><i class="ri-github-fill"></i></div>
                  <div class="interest-body">
                    <h6>Github, Inc.</h6>
                    <p>A provider of Internet hosting for software development and version control using Git. <a href="">Learn more</a></p>
                  </div><!-- interest-body -->
                </div><!-- interest-item -->
                <div class="interest-item">
                  <div class="interest-icon bg-twitter"><i class="ri-twitter-fill"></i></div>
                  <div class="interest-body">
                    <h6>Twitter, Inc.</h6>
                    <p>An American communications company that operates the microblogging and social networking service. <a href="">Learn more</a></p>
                  </div><!-- interest-body -->
                </div><!-- interest-item -->
                <div class="interest-item">
                  <div class="interest-icon bg-amazon"><i class="ri-amazon-fill"></i></div>
                  <div class="interest-body">
                    <h6>Amazon.com, Inc.</h6>
                    <p>An American multinational technology company which focuses on e-commerce, artificial intelligence and more. <a href="">Learn more</a></p>
                  </div><!-- interest-body -->
                </div><!-- interest-item -->
              </div><!-- card-body -->
              <div class="card-footer">
                <nav class="nav">
                  <a href="" class="nav-link">Show more interests (1) <i class="ri-arrow-down-s-line"></i></a>
                </nav>
              </div><!-- card-footer -->
            </div><!-- card -->
  
          </div>
    </div>
    <div class="col-md-6">
        <form  method="post"    action="{{route('update_profile')}}">
            @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$getUser->name}}" placeholder="Name">
            @error('name')<span class="text-danger"> {{$message}}</span>  @enderror  
  
        </div>
    
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$getUser->email}}" placeholder="name@example.com">
            @error('email')<span class="text-danger"> {{$message}}</span>  @enderror  
         
        </div>
    
          <div class="row">
            <div class="col-md-6">
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone"  value="{{$getUser->phone}}" placeholder="Phone">
            @error('phone')<span class="text-danger"> {{$message}}</span>  @enderror  
         
        </div>
    
          
          <div class="mb-3">
            <label for="Country" class="form-label">Country</label>
            <input type="text" class="form-control" id="Country" name="country" value="{{$getUser->country}}" placeholder="Country">
            @error('country')<span class="text-danger"> {{$message}}</span>  @enderror  
          
        </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="State" class="form-label">State </label>
                <input type="text" class="form-control" id="State" name="state" value="{{$getUser->state}}"  placeholder="State">
                @error('State')<span class="text-danger"> {{$message}}</span>  @enderror  
             
            </div>
        
              
              <div class="mb-3">
                <label for="City" class="form-label">City</label>
                <input type="text" class="form-control" id="City" name="city" value="{{$getUser->city}}"  placeholder="City">
                @error('city')<span class="text-danger"> {{$message}}</span>  @enderror  
              
            </div>
        </div>
    </div>
          
    
          <div>
            <label for="exampleFormControAddresslTextarea1" class="form-label">Address</label>
            <textarea class="form-control" id="Address" rows="3"  name="address" placeholder="Enter Address here...">{{$getUser->address}}</textarea>
            @error('address')<span class="text-danger"> {{$message}}</span>  @enderror  
          
        </div>
<br>
          <button type="submit" class="btn btn-primary"  wire:loading.attr="disabled" >Save</button>
        </form>
     </div>
</div>

@endsection