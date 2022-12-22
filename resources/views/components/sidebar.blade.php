  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/dashboard">
        <img src="/assets/images/updated/FYPRocket.png" class="navbar-brand-img h-100" alt="main_logo">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
            <li class="nav-item">
            @if($act == 'dashboard')
            <a class="nav-link active" href="/dashboard">
                @else
            <a class="nav-link" href="/dashboard">
            @endif
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
            <li class="nav-item">
            @if($act == 'project')
            <a class="nav-link active" href="/projects">
                @else
            <a class="nav-link" href="/projects">
            @endif
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-paper-diploma text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Projects</span>
          </a>
        </li>
        @if(session('lect_coordinator'))
        <li class="nav-item">
            @if($act == 'lecturer')
            <a class="nav-link active" href="/lecturers">
              @else
            <a class="nav-link" href="/lecturers">
            @endif
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tie-bow text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Lecturers</span>
          </a>
        </li>
        @endif
        <li class="nav-item">
        @if($act == 'student')
        <a class="nav-link active" href="/students">
            @else
        <a class="nav-link" href="/students">
        @endif
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Students</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
        @if($act == 'profile')
        <a class="nav-link active" href="/profile">
            @else
        <a class="nav-link" href="/profile">
        @endif
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/logout">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>