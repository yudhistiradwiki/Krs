<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login SisfoPEI </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="theme/vendors/feather/feather.css">
  <link rel="stylesheet" href="theme/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="theme/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="theme/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="theme/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="theme/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="theme/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="theme/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="theme/images/logo.svg" width="500px" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form method="POST" action="/login" class="pt-3">
                @csrf
                @if (session() -> has('loginError'))
                {{session('loginError') }} <br>
                @endif
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                </div>
                @error('email')
                {{$message}} <br>
                @enderror
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                      <i class="ti-unlock me-2"></i>Log in to sisfo PEI
                    </button>
                  </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="theme/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="theme/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="theme/js/off-canvas.js"></script>
  <script src="theme/js/hoverable-collapse.js"></script>
  <script src="theme/js/template.js"></script>
  <script src="theme/js/settings.js"></script>
  <script src="theme/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
