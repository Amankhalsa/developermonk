<div class="dropdown dropdown-profile ms-3 ms-xl-4">
    <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><div class="avatar online">
      <img src="{{ isset(Auth::user()->profile_photo_path ) ? asset('storage/profile/'. Auth::user()->profile_photo_path)  : asset('no_image.jpg') }}" alt="..."></div></a>
    <div class="dropdown-menu dropdown-menu-end mt-10-f">
      <div class="dropdown-menu-body">
        <div class="avatar avatar-xl online mb-3"><img src="{{ isset(Auth::user()->profile_photo_path ) ? asset('storage/profile/'. Auth::user()->profile_photo_path)  : asset('no_image.jpg') }}" alt=""></div>
        <h5 class="mb-1 text-dark fw-semibold">{{ isset(Auth::user()->name) ? ucwords(Auth::user()->name) : "" }}</h5>
        {{-- <p class="fs-sm text-secondary">Premium Member</p> --}}
        <nav class="nav">
          <a href="{{route('admin_ProfileEdit')}}"><i class="ri-edit-2-line"></i> Edit Profile</a>
        </nav>
        <hr>
        <nav class="nav">
          <a href="#"><i class="ri-lock-line"></i> Privacy Settings</a>
          <a href="#"><i class="ri-user-settings-line"></i> Account Settings</a>
          <a href="javascript:void(0)" onclick="$('#logout-form').submit();">
            <i class="ri-logout-box-r-line"></i> Log Out</a>
          <form action="{{ route('logout') }}" method="post" id="logout-form">
            @csrf
          </form>
        </nav>
      </div><!-- dropdown-menu-body -->
    </div><!-- dropdown-menu -->
</div><!-- dropdown -->