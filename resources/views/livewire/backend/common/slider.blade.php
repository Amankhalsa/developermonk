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
            <a href="#" class="nav-link active"><i class="ri-calendar-todo-fill"></i> <span>Events Management</span></a>
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
            <a href="" class="nav-link has-sub"><i class="ri-lock-2-line"></i> <span>Authentication</span></a>
            <nav class="nav nav-sub">
              <a href="#" class="nav-sub-link">Sign In Basic</a>
              <a href="#" class="nav-sub-link">Sign In Cover</a>
              <a href="#" class="nav-sub-link">Sign Up Basic</a>
              <a href="#" class="nav-sub-link">Sign Up Cover</a>
              <a href="#" class="nav-sub-link">Verify Account</a>
              <a href="#" class="nav-sub-link">Forgot Password</a>
              <a href="#" class="nav-sub-link">Lock Screen</a>
            </nav>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link has-sub"><i class="ri-error-warning-line"></i> <span>Error Pages</span></a>
            <nav class="nav nav-sub">
              <a href="#" class="nav-sub-link">Page Not Found</a>
              <a href="#" class="nav-sub-link">Internal Server Error</a>
              <a href="#" class="nav-sub-link">Service Unavailable</a>
              <a href="#" class="nav-sub-link">Forbidden</a>
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