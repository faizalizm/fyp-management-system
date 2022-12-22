<!DOCTYPE html>
<html lang="en">

<head>
  <x-headcomp/>
  <title>
    Login
  </title>
  <style>
    .fly-image{
      position: absolute;
      top: 160px;
    }
    
    /* .fly-link{
      position: absolute;
      top: 120px;
    } */
  </style>
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                <a class="navbar-brand m-0" href="/">
                  <img src="../assets/images/updated/FYPRocket.png" alt="fyp rocket logo" width="200px" class="fly-image">
                </a>
                <div class="card-header pb-0 text-start">
                  <a class="navbar-brand m-0" href="/">
                    <i class="ni ni-bold-left"></i>
                    <strong><span class="nav-link-text ms-1">Back</span></strong>
                  </a>
                  <br/>
                  <br/>
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                  <form role="form" action="check" method="POST">
                    @csrf
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password">
                    </div>
                    {{-- <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div> --}}
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('/assets/images/updated/RocketLogin.jpg'); background-position: -50px 0px;
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Login now to supercharge your FYP management"</h4>
                <p class="text-white position-relative">Supercharging FYP management since 2022.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <x-jscomp/>
</body>

</html>