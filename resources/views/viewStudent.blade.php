<!DOCTYPE html>
<html lang="en">

<head>
  <x-headcomp/>
  <title>
    Viewing Student
  </title>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <x-sidebar data="student"/>
  <div class="main-content position-relative max-height-vh-100 h-100">
      <div class="card shadow-lg mx-4 card-profile mt-11">
        <div class="card-body p-3">
          <div class="row gx-4">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                <img src="../assets/images/updated/student.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm p-2">
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1">
                  {{$student['student_name']}}
                </h5>
                <p class="mb-0 font-weight-bold text-sm">
                  {{$student['student_id']}}
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
                  <p class="mb-0">Student Profile</p>
                </div>
              </div>
              <div class="card-body">
                <p class="text-uppercase text-sm">Student Information</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Email address</label>
                      <input class="form-control" type="email" value="{{$student['student_email']}}" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Address</label>
                      <input class="form-control" type="text" value="{{$student['student_address']}}" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">CGPA</label>
                      <input class="form-control" type="text" value="{{$student['student_cgpa']}}" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Year</label>
                      <input class="form-control" type="text" value="{{$student['student_year']}}" readonly>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  
  <x-jscomp/>
</body>

</html>