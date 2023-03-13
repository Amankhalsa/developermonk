<div class="sidebar">
    <div class="sidebar-header">
      <a href="{{route('admin_dashboard')}}" class="sidebar-logo">Admin Panel</a>
    </div><!-- sidebar-header -->
    <div id="sidebarMenu" class="sidebar-body">
      <div class="nav-group show">
        <a href="{{route('admin_dashboard')}}" class="nav-label">Dashboard</a>
        <ul class="nav nav-sidebar">
          <li class="nav-item">
            <a href="{{url('/')}}" target="_blank" class="nav-link ">
              <i class="ri-home-4-fill"></i> <span>Website</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin_view_events')}}" class="nav-link active">
              <i class="ri-calendar-todo-fill"></i> <span>Manage Events </span></a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin_view_events')}}" class="nav-link ">
              <i class="ri-calendar-todo-fill"></i> <span>Manage Venues </span></a>
          </li>


          <li class="nav-item">
            <a href="{{route('admin_view_events')}}" class="nav-link ">
              <i class="ri-calendar-todo-fill"></i> <span>Manage Botleservices </span></a>
          </li>


          <li class="nav-item">
            <a href="{{route('admin_view_events')}}" class="nav-link ">
              <i class="ri-calendar-todo-fill"></i> <span>Manage Guestlist </span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin_view_events')}}" class="nav-link ">
              <i class="ri-calendar-todo-fill"></i> <span>Manage Gallery </span></a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin_view_events')}}" class="nav-link ">
              <i class="ri-calendar-todo-fill"></i> <span>Manage Offers </span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin_view_events')}}" class="nav-link ">
              <i class="ri-calendar-todo-fill"></i> <span>Manage Slider </span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin_view_events')}}" class="nav-link ">
              <i class="ri-calendar-todo-fill"></i> <span>Manage Contact </span></a>
          </li>
        </ul>
      </div><!-- nav-group -->

      <div class="nav-group show">
        <a href="#" class="nav-label">Pages</a>
        <ul class="nav nav-sidebar">
          <li class="nav-item">
            <a href="" class="nav-link has-sub"><i class="ri-account-circle-line"></i> <span>User Pages</span></a>
            <nav class="nav nav-sub">
              <a href="{{route('profile.show')}}" class="nav-sub-link">User Profile</a>
              <a href="#" class="nav-sub-link">People &amp; Groups</a>
              <a href="#" class="nav-sub-link">Activity Log</a>
              <a href="#" class="nav-sub-link">Events</a>
              <a href="#" class="nav-sub-link">Settings</a>
            </nav>
          </li>
  
     
          <li class="nav-item">
            <a href="" class="nav-link has-sub"><i class="ri-file-text-line"></i> <span>Other Pages</span></a>
            <nav class="nav nav-sub">
              <a href="#" class="nav-sub-link">Pricing</a>
              <a href="#" class="nav-sub-link">FAQ</a>
            </nav>
          </li>
        </ul>
      </div><!-- nav-group -->

    </div><!-- sidebar-body -->

</div>