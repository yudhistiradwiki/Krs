<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('judul')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('theme/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('theme/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="theme/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('theme/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="theme/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{asset('theme/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('theme/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('theme/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('theme/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('theme/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('theme/images/favicon.png')}}" />
  <script type="text/javascript">
    function checkAll(ele) {
         var checkboxes = document.getElementsByTagName('input');
         if (ele.checked) {
             for (var i = 0; i < checkboxes.length; i++) {
                 if (checkboxes[i].type == 'checkbox'  && !(checkboxes[i].disabled) ) {
                     checkboxes[i].checked = true;
                 }
             }
         } else {
             for (var i = 0; i < checkboxes.length; i++) {
                 if (checkboxes[i].type == 'checkbox') {
                     checkboxes[i].checked = false;
                 }
             }
         }
     }
   </script>
</head>
<body>
    @include('sweetalert::alert')
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @section('navbar')
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
            @if(Str::length(Auth::guard('user')->user())>0)
            <a class="navbar-brand brand-logo" href="/admin">
            @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
            <a class="navbar-brand brand-logo" href="/student">
            @elseif(Str::length(Auth::guard('dosen')->user())>0)
            <a class="navbar-brand brand-logo" href="/lecture">
            @endif
            <img src="{{asset('theme/images/logo.svg')}}" alt="logo" />
          </a>

          @if(Str::length(Auth::guard('user')->user())>0)
          <a class="navbar-brand brand-logo-mini" href="/admin">
          @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
          <a class="navbar-brand brand-logo-mini" href="/student">
            @elseif(Str::length(Auth::guard('dosen')->user())>0)
          <a class="navbar-brand brand-logo-mini" href="/lecture">
          @endif
            <img src="{{asset('theme/images/logo-mini.svg')}}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
              <?php
                date_default_timezone_set("Asia/Jakarta");
                $jam = date('H:i');
                if ($jam > '05:30' && $jam < '10:00') {
                    $salam = 'Pagi';
                } elseif ($jam >= '10:00' && $jam < '15:00') {
                    $salam = 'Siang';
                } elseif ($jam >= '15:00' && $jam < '18:00') {
                    $salam = 'Sore';
                } else {
                    $salam = 'Malam';
                }
              ?>
            @if(Str::length(Auth::guard('user')->user())>0)
            <h1 class="welcome-text">Selamat <?=$salam?>, <span class="text-black fw-bold">{{Auth::guard('user')->user()->name}}</span></h1>
            @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
            <h1 class="welcome-text">Selamat <?=$salam?>, <span class="text-black fw-bold">{{Auth::guard('mahasiswa')->user()->nama_lengkap}}</span></h1>
            @elseif(Str::length(Auth::guard('dosen')->user())>0)
            <h1 class="welcome-text">Selamat <?=$salam?>, <span class="text-black fw-bold">{{Auth::guard('dosen')->user()->nama_dosen}}</span></h1>
            @endif
            <h3 class="welcome-sub-text">Silahkan gunakan sistem ini untuk mengambil krs</h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          @if(Str::length(Auth::guard('user')->user())>0)
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ url('/' . Auth::guard('user')->user()->photo) }}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ url('/' . Auth::guard('user')->user()->photo) }}" width="85px" height="80px" alt="Profile image">

                <p class="mb-1 mt-3 font-weight-semibold">{{Auth::guard('user')->user()->name}}</p>
                <p class="fw-light text-muted mb-0">{{Auth::guard('user')->user()->email}}</p>
              </div>
              <a class="dropdown-item" href="/logout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
          @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ url('/' . Auth::guard('mahasiswa')->user()->photo) }}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ url('/' . Auth::guard('mahasiswa')->user()->photo) }}" width="85px" height="80px" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{Auth::guard('mahasiswa')->user()->nama_lengkap}}</p>
                <p class="fw-light text-muted mb-0">{{Auth::guard('mahasiswa')->user()->email}}</p>
              </div>
              <a class="dropdown-item" href="/logout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
          @elseif(Str::length(Auth::guard('dosen')->user())>0)
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ url('/' . Auth::guard('dosen')->user()->photo) }}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ url('/' . Auth::guard('dosen')->user()->photo) }}" width="85px" height="80px" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{Auth::guard('dosen')->user()->nama_dosen}}</p>
                <p class="fw-light text-muted mb-0">{{Auth::guard('dosen')->user()->email}}</p>
              </div>
              <a class="dropdown-item" href="/logout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
          @endif
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    @show
    @section('sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            @if(Str::length(Auth::guard('user')->user())>0)
            <a class="nav-link" href="/admin">
            @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
            <a class="nav-link" href="/student">
                @elseif(Str::length(Auth::guard('dosen')->user())>0)
            <a class="nav-link" href="/lecture">
            @endif
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          @if(Str::length(Auth::guard('user')->user())>0)
          <li class="nav-item nav-category">Akademik</li>
          <li class="nav-item">

            <a class="nav-link" data-bs-toggle="collapse" href="#data-master" aria-expanded="false" aria-controls="#data-master">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Data Master</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="data-master">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="/prodi">Program Studi</a></li>
                <li class="nav-item"><a class="nav-link" href="/dosen">Dosen</a></li>
                <li class="nav-item"><a class="nav-link" href="/mahasiswa">Mahasiswa</a></li>
                <li class="nav-item"><a class="nav-link" href="/matkul">Mata Kuliah</a></li>
                <li class="nav-item"><a class="nav-link" href="/tahunakad">Tahun Akademik</a></li>
                </ul>
            </div>
          </li>
          @endif

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Report Mahasiswa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                @if(Str::length(Auth::guard('user')->user())>0)
                <li class="nav-item"><a class="nav-link" href="/krs/admin">KRS</a></li>
                @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
                <li class="nav-item"><a class="nav-link" href="/krs/{{Auth::guard('mahasiswa')->user()->nim}}/6">KRS</a></li>
            @elseif(Str::length(Auth::guard('dosen')->user())>0)
                <li class="nav-item"><a class="nav-link" href="/krs/dosen">KRS</a></li>
            @endif
            @if(Str::length(Auth::guard('user')->user())>0)
                <li class="nav-item"><a class="nav-link" href="/khs/admin">KHS</a></li>
            @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
                <li class="nav-item"><a class="nav-link" href="/khs/view/{{Auth::guard('mahasiswa')->user()->nim}}/6">KHS</a></li>
            @elseif(Str::length(Auth::guard('dosen')->user())>0)
                <li class="nav-item"><a class="nav-link" href="/khs/dosen">KHS</a></li>
            @endif
            @if(Str::length(Auth::guard('user')->user())>0)
                <li class="nav-item"><a class="nav-link" href="/nilai/admin">Nilai Mahasiswa</a></li>
            @elseif(Str::length(Auth::guard('mahasiswa')->user())>0)
                <li class="nav-item"><a class="nav-link" href="/nilai/mhs">Nilai Mahasiswa</a></li>
            @elseif(Str::length(Auth::guard('dosen')->user())>0)
                <li class="nav-item"><a class="nav-link" href="/nilai/select/{{Auth::guard('dosen')->user()->nidn}}">Nilai Mahasiswa</a></li>
            @endif
                </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Pengaturan</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/login"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="/logout"> Logout </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.belajar.pei.ac.id">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Moodle</span>
            </a>
          </li>
        </ul>
      </nav>
      @show


      <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            @yield('konten')
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">SisfoPEI by Muhammad Dwiki Yudhistira.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('theme/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('theme/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('theme/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('theme/vendors/progressbar.js/progressbar.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('theme/js/off-canvas.js')}}"></script>
  <script src="{{asset('theme/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('theme/js/template.js')}}"></script>
  <script src="{{asset('theme/js/settings.js')}}"></script>
  <script src="{{asset('theme/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('theme/js/jquery.cookie.js" type="text/javascript')}}"></script>
  <script src="{{asset('theme/js/dashboard.js')}}"></script>
  <script src="{{asset('theme/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

