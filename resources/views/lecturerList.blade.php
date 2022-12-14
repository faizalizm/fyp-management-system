
<!DOCTYPE html>
<html lang="en">

<head>
  <x-headcomp/>
  <title>
    Lecturers
  </title>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <x-sidebar data="lecturer"/>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Lecturers</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Lecturers</h6>
        </nav>
        <x-lectbar data="{{session('lect_name')}}"/>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Lecturers table ({{count($lectDisplay)}})</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lecturer</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Department</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Supervisee</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Examinee</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($lectDisplay) == 0)
                    <tr>
                      <td colspan="8">
                        <div class="d-flex justify-content-center mt-4">
                          <p><strong>No results found</strong></p>
                        <div>
                      </td>
                    </tr>
                    @endif
                    @foreach($lectDisplay as $display)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/images/updated/lecturer.png" class="avatar avatar-sm me-3 p-2" alt="lecturer">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$display["lect_name"]}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$display["lect_email"]}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                          @if($display["lect_dept"] == 1)
                            CCI
                          @elseif($display["lect_dept"] == 2)
                            COE
                          @elseif($display["lect_dept"] == 3)
                            COBA
                          @elseif($display["lect_dept"] == 4)
                            CES
                          @elseif($display["lect_dept"] == 5)
                            CEGS
                          @endif
                        </p>
                        <p class="text-xs text-secondary mb-0">
                          @if($display["lect_dept"] == 1)
                            Computing and Informatics
                          @elseif($display["lect_dept"] == 2)
                            Engineering
                          @elseif($display["lect_dept"] == 3)
                            Business Management and Accounting
                          @elseif($display["lect_dept"] == 4)
                            Enerygy Economics and Social Sciences
                          @elseif($display["lect_dept"] == 5)
                            Graduate Studies
                          @endif
                        </p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm {{$projectDisplay->where('sv_id', '=', $display["lect_id"])->get()->count() == 0? 'bg-gradient-secondary' : 'bg-gradient-success'}}">{{$projectDisplay->where('sv_id', '=', $display["lect_id"])->get()->count()}}
                        </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm {{$projectDisplay->where('ex1_id', '=', $display["lect_id"])->orWhere('ex2_id', '=', $display["lect_id"])->count() == 0? 'bg-gradient-secondary' : 'bg-gradient-success'}}">{{$projectDisplay->where('ex1_id', '=', $display["lect_id"])->orWhere('ex2_id', '=', $display["lect_id"])->get()->count()}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"></span>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <x-footercomp/>
    </div>
  </main>

  <x-jscomp/>
</body>

</html>