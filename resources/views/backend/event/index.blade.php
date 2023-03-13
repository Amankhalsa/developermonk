@extends('layouts.backend')
@section('title', 'Edit Profile')
@section('content')

<div class="main main-docs">
      <div class="container-fluid">
        <label class="main-title-label">Components</label>
        <h2 class="main-title">Tables</h2>
        <hr class="main-separator">
            <!-- Button trigger modal -->
            <div class="d-flex flex-row-reverse ">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   Add Event
                  </button>
            </div>

            <!-- Button trigger modal -->

  

  <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          {{-- <div class="modal-dialog modal-xl"> --}}
        <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Event</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('admin_add_events')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
        
                  <div class="col-md-3">
                    <div class="mb-3">
                      <label for="name" class="col-form-label">Club name:</label>
                      <input type="text" class="form-control" id="name"  name="club_name">
                      @error('club_name')<span class="text-danger"> {{$message}}</span>  @enderror  
        
                    </div>
                </div>
                  <div class="col-md-3">
                    <div class="mb-3">
                      <label for="Date" class="col-form-label">Date:</label>
                      <input type="date" class="form-control" id="Date" name="date">
                      @error('date')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                    </div>
        
                  </div>
                  <div class="col-md-3">
        
                     <div class="mb-3">
                        <label for="Time" class="col-form-label">Time:</label>
                        <input type="time" class="form-control" id="Time" name="time">
                        @error('time')<span class="text-danger"> {{$message}}</span>  @enderror  
                    
                      </div>
                      
                  </div>
                  <div class="col-md-3">
                    <div class="mb-3">
                      <label for="age" class="col-form-label">Age:</label>    
                      <input type="number" class="form-control" id="age" name="min_age">
                      @error('age')<span class="text-danger"> {{$message}}</span>  @enderror  
                    </div>
                </div>
                    <div class="col-md-3">
                      <div class="mb-3">
                        <label for="venue" class="col-form-label">Venue:</label>
                        <input type="text" class="form-control" id="venue" name="venue">
                        @error('venue')<span class="text-danger"> {{$message}}</span>  @enderror  
        
                      </div>
                  </div>
            
         
                  <div class="col-md-3">
                    {{-- check_in --}}
                    <div class="mb-3">
                      <label for="Check_in" class="col-form-label">Check in:</label>
                      <input type="time" class="form-control" id="Check_in"  name="check_in">
                      @error('check_in')<span class="text-danger"> {{$message}}</span>  @enderror  
        
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="mb-3">
                      <label for="Check_out" class="col-form-label">Check Out:</label>
                      <input type="time" class="form-control" id="Check_out" name="check_out">
                      @error('check_out')<span class="text-danger"> {{$message}}</span>  @enderror  
        
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="mb-3">
                      <label for="EventThambnail" class="form-label">Event Thambnail</label>
                      <input class="form-control" type="file" id="EventThambnail" name="event_thambnail">
                      @error('event_thambnail')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                    </div>
                  </div>
            
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="Address" class="col-form-label">Address:</label>
                      <textarea class="form-control" id="Address" name="address"></textarea>
                      @error('address')<span class="text-danger"> {{$message}}</span>  @enderror  
                    
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                  <label for="location" class="col-form-label">Location:</label>
                  <textarea class="form-control" id="location" name="location"> </textarea>
                  @error('location')<span class="text-danger"> {{$message}}</span>  @enderror  
        
                </div>
                  </div>
                  <div class="col-md-4">
        
                    <div class="mb-3">
                      <label for="crowd" class="col-form-label">Crowd:</label>
                      <input type="text" class="form-control" value="Hip Hop, Mature"   name="crowd" data-role="tagsinput">
                      @error('crowd')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                    </div>
                    </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="multi_pic" class="form-label">Multiple Images</label>
                      <input class="form-control" type="file" id="multi_pic" name="multi_pic[]" multiple>
                      @error('multi_pic')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="AdditionalService" class="form-label">Additional Service</label>
                      <input class="form-control" type="file" id="AdditionalService" name="ad_service_img">
                      @error('ad_service_img')<span class="text-danger"> {{$message}}</span>  @enderror  
                   
                    </div>
                  </div>
        
        
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="Additional" class="col-form-label">Additional Service:</label>
                      <textarea class="form-control" id="Additional" name="ad_service_dis"> </textarea>
                      @error('ad_service_dis')<span class="text-danger"> {{$message}}</span>  @enderror  
                
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                  <label for="Discription" class="col-form-label">Host Event Discription:</label>
                  <textarea class="form-control" id="Discription" name="event_discription"></textarea>
                  @error('event_discription')<span class="text-danger"> {{$message}}</span>  @enderror  
               
                </div>
                  </div>
        
        
                </div>
         
        
            
                
             
                {{-- crowd --}}
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send message</button>
                  </div>
          </form>
        </div>
    
      </div>
    </div>
           </div>
  
           <!-- Modal -->

        <h5 id="section11" class="main-subtitle">Event List</h5>
        <div class="card ">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
         @if(isset($getevents))
         @foreach($getevents as $key => $values)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$values->club_name}}</td>
                      <td>{{$values->date}}</td>
                      <td>{{$values->time}}</td>

                    <td>
                    
                    <a href=""class="btn btn-sm btn-info"title="edit"><i class="fa fa-edit"></i></a>

                    <a href=""   data-bs-toggle="modal" data-bs-target="#exampleModal{{$values->id}}" class="btn btn-sm btn-warning"title="Show"><i class="fa fa-eye"></i></a>

                    
                    <div class="modal fade" id="exampleModal{{$values->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Event detail</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="{{route('admin_add_events')}}" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                      
                                <div class="col-md-3">
                                  <div class="mb-3">
                                    <label for="name" class="col-form-label">Club name:</label>
                                  
                                  </div>
                              </div>
                                <div class="col-md-3">
                                  <div class="mb-3">
                                    <label for="Date" class="col-form-label">Date:</label>
                                    
                                  </div>
                      
                                </div>
                                <div class="col-md-3">
                      
                                   <div class="mb-3">
                                      <label for="Time" class="col-form-label">Time:</label>
                                     
                                    </div>
                                    
                                </div>
                                <div class="col-md-3">
                                  <div class="mb-3">
                                    <label for="age" class="col-form-label">Age:</label>    
                                    
                                  </div>
                              </div>
                                  <div class="col-md-3">
                                    <div class="mb-3">
                                      <label for="venue" class="col-form-label">Venue:</label>
                                     
                                    </div>
                                </div>
                          
                       
                                <div class="col-md-3">
                                  {{-- check_in --}}
                                  <div class="mb-3">
                                    <label for="Check_in" class="col-form-label">Check in:</label>
                                   
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="mb-3">
                                    <label for="Check_out" class="col-form-label">Check Out:</label>
                                  
                                  </div>
                                </div>
              
                                <div class="col-md-3">
                                  <div class="mb-3">
                                    <label for="EventThambnail" class="form-label">Event Thambnail</label>
                                   
                                  </div>
                                </div>
                          
                                <div class="col-md-6">
                                  <div class="mb-3">
                                    <label for="Address" class="col-form-label">Address:</label>
                                  
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="mb-3">
                                <label for="location" class="col-form-label">Location:</label>
                               
                              </div>
                                </div>
                                <div class="col-md-4">
                      
                                  <div class="mb-3">
                                    <label for="crowd" class="col-form-label">Crowd:</label>
                                    
                                  </div>
                                  </div>
                                <div class="col-md-4">
                                  <div class="mb-3">
                                    <label for="multi_pic" class="form-label">Multiple Images</label>
                                  
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="mb-3">
                                    <label for="AdditionalService" class="form-label">Additional Service</label>
                                 
                                  </div>
                                </div>
                      
                      
                                <div class="col-md-6">
                                  <div class="mb-3">
                                    <label for="Additional" class="col-form-label">Additional Service:</label>
                                   
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="mb-3">
                                <label for="Discription" class="col-form-label">Host Event Discription:</label>
                               
                              </div>
                                </div>
                      
                      
                              </div>
                       
                      
                          
                              
                           
                            
                        </form>
                          </div>
                         
                        </div>
                      </div>
                    </div>
                    <a href="{{route('admin_delete_events',$values->id)}}"class="btn btn-sm btn-danger"title="delete"id="delete"><i class="fa fa-trash"></i></a>

                    </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
             </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- container -->
    </div>
    {{-- modal  --}}
    


@endsection