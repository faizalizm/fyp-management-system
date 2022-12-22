<!DOCTYPE html>
<html lang="en">

<head>
  <x-headcomp/>
  <title>
    Profile
  </title>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <x-sidebar data="profile"/>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
      <div class="container-fluid py-1">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
          </ol>
          <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../assets/images/updated/lecturer.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm p-2">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{session('lect_name')}}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                @if(session('lect_dept') == 1)
                  College of Computing and Informatics (CCI)
                @elseif(session('lect_dept') == 2)
                  College of Engineering (COE)
                @elseif(session('lect_dept') == 3)
                  College of Business Management & Accounting (COBA)
                @elseif(session('lect_dept') == 4)
                  College of Energy Economics & Social Sciences (CES)
                @elseif(session('lect_dept') == 5)
                  College of Graduate Studies (COGS)
                @endif
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Profile</p>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">Lecturer Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Full Name</label>
                    <input class="form-control" type="text" value="{{session('lect_name')}}" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email address</label>
                    <input class="form-control" type="email" value="{{session('lect_email')}}" readonly>
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Password</p>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Current</label>
                    <input class="form-control" type="text" value="******">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <x-footercomp/>
    </div>
  </div>

  <x-jscomp/>
</body>

</html>