<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
<div class="main main-docs">
      <div class="container-fluid">
        <label class="main-title-label">Components</label>
        <h2 class="main-title">Tables</h2>
       

        <hr class="main-separator">
            <a href="{{route('admin_view_events')}}">
                <button type="button" class="btn btn-danger rounded-pill " >Back</button>
            </a>

          <div class="card-body mt-3">
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Events
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Date:</label>
              <input type="date" class="form-control" id="recipient-name">
            </div>

            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Time:</label>
                <input type="time" class="form-control" id="recipient-name">
              </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
          </div><!-- card-body -->

  


 
      </div><!-- container -->

   
    </div>
   
</div>
