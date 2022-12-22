      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>{{$title}}</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Duration</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Supervisor</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Examiner</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status & Progress</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($projectDisplay) == 0)
                    <tr>
                      <td colspan="8">
                        <div class="d-flex justify-content-center mt-4">
                          <p><strong>Not Yet Assigned</strong></p>
                        <div>
                      </td>
                    </tr>
                    @endif
                    @foreach($projectDisplay as $display)
                    <tr onclick="document.location = '{{'projects/'.$display['project_id']}}';" class="rowhover">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            @if($display["project_type"] == 1)
                              <img src="../assets/images/updated/development.png" class="avatar-sm me-3 p-1" alt="development">
                            @elseif($display["project_type"] == 2)
                              <img src="../assets/images/updated/research.png" class="avatar-sm me-3 p-1" alt="research">
                            @endif
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{Str::limit($display["project_title"], 40,'...');}}</h6>
                            <p class="text-xs text-secondary mb-0">
                              {{($studentDisplay->where('student_id', $display["student_id"])->first())['student_name']}}
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                          {{Str::limit($display["project_desc"], 25,'...');}}
                        </p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                          {{$display["project_start"]}}
                        </p>
                        <p class="text-xs font-weight-bold mb-0">
                          {{$display["project_end"]}}
                        </p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                          {{$display["project_duration"]}} months
                        </p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                          {{($lecturerDisplay->where('lect_id', $display["sv_id"])->first())['lect_name']}}
                        </p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                          {{($lecturerDisplay->where('lect_id', $display["ex1_id"])->first())['lect_name']}}
                        </p>
                        <p class="text-xs font-weight-bold mb-0">
                          {{($lecturerDisplay->where('lect_id', $display["ex2_id"])->first())['lect_name']}}
                        </p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        @if($display["project_status"] == 1)
                        <span class="badge badge-sm bg-gradient-success">On Track
                        @elseif($display["project_status"] == 2)
                        <span class="badge badge-sm bg-gradient-warning">Delayed
                        @elseif($display["project_status"] == 3)
                        <span class="badge badge-sm bg-gradient-info">Extended
                        @elseif($display["project_status"] == 4)
                        <span class="badge badge-sm bg-gradient-secondary">Completed
                        @else
                        <span class="badge badge-sm bg-gradient-primary">New
                        @endif
                        <br>
                        @if($display["project_progress"] == 1)
                        Milestone 1
                        @elseif($display["project_progress"] == 2)
                        Milestone 2
                        @elseif($display["project_progress"] == 3)
                        Final Report
                        @endif
                        </span>
                      </td>
                      <td class="align-middle">
                        <a href="{{'projects/'.$display['project_id']}} " class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          View
                        </a>
                      </td>
                    </tr>
                    @endforeach
                    @if($title == 'All Projects')
                    @if($projectDisplay->hasPages())
                    <tr>
                      <td colspan="8">
                        <div class="d-flex justify-content-center">
                          <nav>
                            <ul class="pagination">
                              {{-- Previous Page Link --}}
                              @if ($projectDisplay->onFirstPage())
                                <li class="page-item disabled" aria-disabled="true">
                                  <span class="page-link">@lang('pagination.previous')</span>
                                </li>
                              @else
                              <li class="page-item">
                                <a class="page-link" href="{{ $projectDisplay->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                              </li>
                              @endif
                              
                              {{-- Next Page Link --}}
                              @if ($projectDisplay->hasMorePages())
                              <li class="page-item">
                                <a class="page-link" href="{{ $projectDisplay->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                              </li>
                              @else
                              <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link">@lang('pagination.next')</span>
                              </li>
                              @endif
                            </ul>
                            <div class="d-flex justify-content-center">
                              <p class="text-s mb-0">Showing page {{ $projectDisplay->currentPage() }} of {{ $projectDisplay->lastPage() }}</p>
                            </div>
                          </nav>
                        </div>
                      </td>
                    </tr>
                    @endif
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>