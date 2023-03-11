<div>
  <div class="main main-docs">
    <div class="container-fluid"> 
  {{-- Care about people's approval and you will be their prisoner. --}}
  <hr class="main-separator">

    <div class="card">

    </div>
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="event_id" class="col-form-label">Event id:</label>
              <input type="text" class="form-control" id="event_id">
            </div>
        </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="name" class="col-form-label">Club name:</label>
              <input type="text" class="form-control" id="name"  wire:model="club_name">
              @error('club_name')<span class="text-danger"> {{$message}}</span>  @enderror  

            </div>
        </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="Date" class="col-form-label">Date:</label>
              <input type="date" class="form-control" id="Date" wire:model="date">
              @error('date')<span class="text-danger"> {{$message}}</span>  @enderror  
           
            </div>

          </div>
          <div class="col-md-4">

             <div class="mb-3">
                <label for="Time" class="col-form-label">Time:</label>
                <input type="time" class="form-control" id="Time" wire:model="time">
                @error('time')<span class="text-danger"> {{$message}}</span>  @enderror  
            
              </div>
              
          </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="venue" class="col-form-label">Venue:</label>
                <input type="text" class="form-control" id="venue" wire:model="venue">
                @error('venue')<span class="text-danger"> {{$message}}</span>  @enderror  

              </div>
          </div>
          <div class="col-md-4">
              <div class="mb-3">
                <label for="age" class="col-form-label">Age:</label>
                
                <input type="number" class="form-control" id="age" wire:model="age">
                @error('age')<span class="text-danger"> {{$message}}</span>  @enderror  

              </div>
          </div>
          <div class="col-md-4">

          <div class="mb-3">
            <label for="crowd" class="col-form-label">Crowd:</label>
            <input type="text" class="form-control" value="Hip Hop, Mature"   wire:model="crowd" data-role="tagsinput">
            @error('crowd')<span class="text-danger"> {{$message}}</span>  @enderror  
         
          </div>
          </div>
          <div class="col-md-4">
            {{-- check_in --}}
            <div class="mb-3">
              <label for="Check_in" class="col-form-label">Check in:</label>
              <input type="text" class="form-control" id="Check_in"  wire:model="check_in">
              @error('check_in')<span class="text-danger"> {{$message}}</span>  @enderror  

            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="Check_out" class="col-form-label">Check Out:</label>
              <input type="text" class="form-control" id="Check_out" wire:model="check_in">
              @error('check_out')<span class="text-danger"> {{$message}}</span>  @enderror  

            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="Address" class="col-form-label">Address:</label>
              <textarea class="form-control" id="Address"></textarea>
              @error('address')<span class="text-danger"> {{$message}}</span>  @enderror  
            
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
          <label for="location" class="col-form-label">Location:</label>
          <textarea class="form-control" id="location"></textarea>
          @error('location')<span class="text-danger"> {{$message}}</span>  @enderror  

        </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="EventThambnail" class="form-label">Event Thambnail</label>
              <input class="form-control" type="file" id="EventThambnail">
          @error('event_thambnail')<span class="text-danger"> {{$message}}</span>  @enderror  
           
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="MultipleImages" class="form-label">Multiple Images</label>
              <input class="form-control" type="file" id="MultipleImages" multiple>
          @error('event_multi')<span class="text-danger"> {{$message}}</span>  @enderror  
           
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="AdditionalService" class="form-label">Additional Service</label>
              <input class="form-control" type="file" id="AdditionalService">
          @error('ad_service_img')<span class="text-danger"> {{$message}}</span>  @enderror  
           
            </div>
          </div>


          <div class="col-md-6">
            <div class="mb-3">
              <label for="Additional" class="col-form-label">Additional Service:</label>
              <textarea class="form-control" id="Additional"></textarea>
              @error('ad_service_dis')<span class="text-danger"> {{$message}}</span>  @enderror  
        
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
          <label for="Discription" class="col-form-label">Host Event Discription:</label>
          <textarea class="form-control" id="Discription"></textarea>
          @error('event_discription')<span class="text-danger"> {{$message}}</span>  @enderror  
       
        </div>
          </div>


        </div>
 

    
        
     
        {{-- crowd --}}
     
      </form>
    
    <div class="modal-footer">

      <button type="submit" wire:click.prevent="saveEvent()" class="btn btn-primary">Save</button>
    </div>
  </div>
</div>
</div>
</div>
