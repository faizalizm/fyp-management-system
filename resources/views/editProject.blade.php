<!DOCTYPE html>
<html lang="en">

<head>
  <x-headcomp/>
  <title>
    Viewing Project
  </title>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <x-sidebar data="project"/>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <div class="container-fluid py-4">
        <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">{{$svPriv? "Supervisee Project" : "Edit Project"}}</p>
              </div>
            </div>
            <form action="/editProject", method="POST">
              @csrf
              <input type="hidden", name="svPriv" value="{{$svPriv}}">
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
                        {{session('lect_coordinator')? "" : "disabled"}}
                      >
                        <option value={{$project->student_id}} selected>
                            {{$studentList->where('student_id', '=', $project->student_id)->first()['student_name']}}
                        </option>
                        @foreach($studentList->where('student_id', '!=', $project->student_id) as $display)
                          <option value={{$display['student_id']}}>{{$display['student_name']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Title</label>
                      <input class="form-control" type="text", name="title" value="{{$project->project_title}}" {{session('lect_coordinator')? "" : "readonly"}}>
                      <input type="hidden", name="project_id" value="{{$project->project_id}}">
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
                        min="1" max="12" value="{{$project->project_duration}}"
                        onChange="document.getElementById('rangeval').innerText = document.getElementById('duration').value + ' months'"
                        {{session('lect_coordinator')? "" : "disabled"}}
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
                        {{session('lect_coordinator')? "" : "disabled"}}
                      >
                          <option {{$project->project_type == 1? "selected" : ""}} value=1>Development Project</option>
                          <option {{$project->project_type == 2? "selected" : ""}} value=2>Research Project</option>
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
                        {{session('lect_coordinator')? "" : "disabled"}}
                      >
                        <option value={{$sv->lect_id}} selected>{{$sv->lect_name}}</option>
                        @foreach($lecturerDisplay->where('lect_id', '!=', $sv->lect_id) as $display)
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
                        {{session('lect_coordinator')? "" : "disabled"}}
                      >
                        <option value={{$ex1->lect_id}} selected>{{$ex1->lect_name}}</option>
                        @foreach($lecturerDisplay->where('lect_id', '!=', $ex1->lect_id) as $display)
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
                        {{session('lect_coordinator')? "" : "disabled"}}
                      >
                        <option value={{$ex2->lect_id}} selected>{{$ex2->lect_name}}</option>
                        @foreach($lecturerDisplay->where('lect_id', '!=', $ex2->lect_id) as $display)
                          <option value={{$display['lect_id']}}>{{$display['lect_name']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <hr class="horizontal dark">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Description</label>
                      <input class="form-control" type="text" name="desc" value="{{$project->project_desc? $project->project_desc: ""}}" {{$svPriv? "" : "readonly"}}>
                    </div>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Start Date</label>
                      <input class="form-control" type="date" name="start" value="{{$project->project_start? $project->project_start : ""}}" {{$svPriv? "" : "readonly"}}>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">End Date</label>
                      <input class="form-control" type="date", name="end" value="{{$project->project_start? $project->project_end : ""}}" {{$svPriv? "" : "readonly"}}>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Project Progress</label>
                      <select
                        class="form-control"
                        required
                        name="progress"
                        {{$svPriv? "" : "disabled"}}>
                            <option {{$project->project_progress == 1? "selected" : ""}} value=1>Milestone 1</option>
                            <option {{$project->project_progress == 2? "selected" : ""}} value=2>Milestone 2</option>
                            <option {{$project->project_progress == 3? "selected" : ""}} value=3>Final Report</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Project Status</label>
                      <select
                        class="form-control"
                        required
                        name="status"
                        {{$svPriv? "" : "disabled"}}>
                      >
                          <option {{$project->project_status == 1? "selected" : ""}} value=1>On Track</option>
                          <option {{$project->project_status == 2? "selected" : ""}} value=2>Delayed</option>
                          <option {{$project->project_status == 3? "selected" : ""}} value=3>Extended</option>
                          <option {{$project->project_status == 4? "selected" : ""}} value=4>Completed</option>
                      </select>
                    </div>
                  </div>
                </div>
                <hr class="horizontal dark">
                <div class="d-flex justify-content-between">
                  @if(session('lect_coordinator'))
                  <div class="col-md-0">
                    <a href="{{'delProject/'.$project->project_id}}" class="btn btn-danger btn-sm" role="button" aria-pressed="true">Delete</a>
                  </div>
                  @endif
                  <div class="col-md-0">
                    <button class="btn btn-secondary btn-sm ms-auto" type="reset">Reset</button>
                    <button class="btn btn-primary btn-sm ms-auto" type="submit">Confirm Edit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <x-footercomp/>
    </div>
  </div>

  <x-jscomp/>
</body>

</html>