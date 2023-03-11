<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
<div class="main main-docs">
      <div class="container-fluid">
        <label class="main-title-label">Components</label>
        <h2 class="main-title">Tables</h2>
        <hr class="main-separator">
            <!-- Button trigger modal -->
            <div class="d-flex flex-row-reverse ">

              <a href="{{route('add_events')}}" class="btn btn-primary ">
                Add Events
              </a>
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

<a href=""class="btn btn-sm btn-warning"title="Show"><i class="fa fa-eye"></i></a>

<a href=""class="btn btn-sm btn-danger"title="delete"id="delete"><i class="fa fa-trash"></i></a>

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
    
</div>
