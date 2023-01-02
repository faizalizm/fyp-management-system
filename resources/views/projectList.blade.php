
<!DOCTYPE html>
<html lang="en">

<head>
  <x-headcomp/>
  <title>
    Projects
  </title>
  <style>
    .pagination{
      padding: 0px 50px;
    }
    .page-item{
      margin: -10px 16px;
      margin-top: 20px;
    }
    .pagination .page-link{
      width: 120%;
      border: 0px;
      border-radius: 0px !important;
    }
  </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <x-sidebar data="project"/>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Projects</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Projects</h6>
        </nav>
        <x-lectbar data="{{session('lect_name')}}"/>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @if(session('lect_coordinator'))
      <x-projecttable title="All Projects" :projectDisplay="$projectDisplay" :lecturerDisplay="$lecturerDisplay" :studentDisplay="$studentDisplay"/>
      @endif

      <x-projecttable title="Supervisee List" :projectDisplay="$superviseeDisplay" :lecturerDisplay="$lecturerDisplay" :studentDisplay="$studentDisplay"/>
      <x-projecttable title="Examinee List" :projectDisplay="$examineeDisplay" :lecturerDisplay="$lecturerDisplay" :studentDisplay="$studentDisplay"/>

      @if(session('lect_coordinator'))
      <div class="row">
        <div class="col-md-8">
          <form action="/addProject" method="POST">
            @csrf
            <div class="card">
              <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                  <p class="mb-0">Create Project</p>
                </div>
              </div>
              <div class="card-body">
                  <p class="text-uppercase text-sm">Project Information</p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Student</label>
                        <select
                          class="form-control"
                          required
                          name="student_id"
                        >
                          <option selected>-- Choose --</option>
                          @foreach($studentAvail as $display)
                            <option value={{$display['student_id']}}>{{$display['student_name']}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Title</label>
                        <input class="form-control" type="text" name="title" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="duration" class="form-control-label">Duration</label>
                        <input class="form-control"
                          id="duration"
                          type="range"
                          name="duration" 
                          min="1" max="12" value="4"
                          onChange="document.getElementById('rangeval').innerText = document.getElementById('duration').value + ' months'"
                          >
                        <label id="rangeval">4 months</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Type</label>
                        <select
                          class="form-control"
                          required
                          name="type"
                        >
                          <option selected>-- Choose --</option>
                          <option value="1">Development Project</option>
                          <option value="2">Research Project</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-sm">Lecturer Information</p>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Supervisor</label>
                        <select
                          class="form-control"
                          required
                          name="sv_id"
                        >
                          <option selected>-- Choose --</option>
                          @foreach($lecturerDisplay as $display)
                            <option value={{$display['lect_id']}}>{{$display['lect_name']}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Examiner 1</label>
                        <select
                          class="form-control"
                          required
                          name="ex1_id"
                        >
                          <option selected>-- Choose --</option>
                          @foreach($lecturerDisplay as $display)
                            <option value={{$display['lect_id']}}>{{$display['lect_name']}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Examiner 2</label>
                        <select
                          class="form-control"
                          required
                          name="ex2_id"
                        >
                          <option selected>-- Choose --</option>
                          @foreach($lecturerDisplay as $display)
                            <option value={{$display['lect_id']}}>{{$display['lect_name']}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-sm ms-auto" type="submit">Create</button>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      @endif
      <x-footercomp/>
    </div>
  </main>

  <x-jscomp/>
</body>

</html>