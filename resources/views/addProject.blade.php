<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="far fa-file-alt"></i>
                <span> Reports <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Daily Report</a>
                <a class="dropdown-item" href="#">Weekly Report</a>
                <a class="dropdown-item" href="#">Yearly Report</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="products.html">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="accounts.html">
                <i class="far fa-user"></i> Accounts
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="fas fa-cog"></i>
                <span> Settings <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Customize</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.html">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Create Project</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="addProject " method="POST" class="tm-edit-product-form">
                  @csrf
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Project Title
                    </label>
                    <input
                      id="name"
                      name="title"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  {{-- <div class="form-group mb-3">
                    <label
                      for="description"
                      >Project Description</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      required
                    ></textarea>
                  </div> --}}
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Project Type</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                      name="type"
                      required
                    >
                      <option selected>-- Choose --</option>
                      <option value="1">Development Project</option>
                      <option value="2">Research Project</option>
                    </select>
                  </div>
                  
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                          for="start"
                          >Start Date
                        </label>
                        <input
                          id="date1"
                          name="start"
                          type="text"
                          class="form-control validate"
                          data-large-mode="true"
                        />
                      </div>
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                          for="end"
                          >End Date
                        </label>
                        <input
                          id="date2"
                          name="end"
                          type="text"
                          class="form-control validate"
                          data-large-mode="true"
                        />
                      </div>
                  </div>
                  <div class="row">
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label
                        for="duration"
                        >Duration
                      </label>
                      <input
                        id="duration"
                        name="duration"
                        type="range"
                        class="form-control validate"
                        min="1" max="12" value="4"
                        onInput="$('#rangeval').html($(this).val() + ' months')"
                        required
                      /><label id="rangeval">4 months</label>
                    </div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="form-group mb-3">
                  <label
                    for="category"
                    >Student</label
                  >
                  <select
                    class="custom-select tm-select-accounts"
                    id="category"
                    name="student_id"
                    required
                  >
                    <option selected>-- Choose --</option>
                    @foreach($studentDisplay as $display)
                      <option value={{$display['student_id']}}>{{$display['student_name']}}</option>
                    @endforeach
                  </select>
                
                </div>
                <div class="form-group mb-3">
                  <label
                    for="category"
                    >Supervisor</label
                  >
                  <select
                    class="custom-select tm-select-accounts"
                    id="category"
                    required
                    name="sv_id"
                  >
                    <option selected>-- Choose --</option>
                    @foreach($lecturerDisplay as $display)
                      <option value={{$display['lect_id']}}>{{$display['lect_name']}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label
                    for="category"
                    >Examiner #1</label
                  >
                  <select
                    class="custom-select tm-select-accounts"
                    required
                    name="ex1_id"
                  >
                    <option selected>-- Choose --</option>
                    @foreach($lecturerDisplay as $display)
                      <option value={{$display['lect_id']}}>{{$display['lect_name']}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label
                    for="category"
                    >Examiner #2</label
                  >
                  <select
                    class="custom-select tm-select-accounts"
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
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Confirm Project Creation</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
        </div>
    </footer> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#date1").datepicker();
      });

      $(function() {
        $("#date2").datepicker();
      });
    </script>
  </body>
</html>


{{-- Upload Image --}}
                {{-- <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div> --}}