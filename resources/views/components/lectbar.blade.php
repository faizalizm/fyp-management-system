        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              @if(session()->get('lect_coordinator'))
              <form action="/search" method="POST">
                @csrf
                <div class="input-group">
                  <span class="input-group-text text-body"
                  ><i class="fas fa-search" aria-hidden="true"></i
                    ></span>
                    <input
                    type="text"
                    class="form-control"
                    name="keyword"
                    placeholder="Type here..."
                    />
                </div>
              </form>
              @endif
            </div>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;"
                  class="nav-link text-white font-weight-bold px-0"
                  id="dropdownMenuButton"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">{{$lect_name}}</span>
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                  aria-labelledby="dropdownMenuButton"
                >
                  <li>
                    <a
                      class="dropdown-item border-radius-md"
                      href="/"
                    >
                      <div class="d-flex py-1">
                        <div
                          class="avatar avatar-sm bg-gradient-light me-3 my-auto"
                        >
                          <img src="../assets/images/updated/home.png" class="p-2"/>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Go to homepage
                          </h6>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a
                      class="dropdown-item border-radius-md"
                      href="/logout"
                    >
                      <div class="d-flex py-1">
                        <div
                          class="avatar avatar-sm bg-gradient-danger me-3 my-auto"
                        >
                          <img src="../assets/images/updated/logout.png" class="p-2"/>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Logout from Rocket
                          </h6>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              </li>
            </ul>
          </div>