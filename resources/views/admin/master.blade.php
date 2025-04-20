<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RF | Admin</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
     

    

    </div>
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo.svg" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="./index.html" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
      


            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">UI</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="./ui-buttons.html" aria-expanded="false">
                <iconify-icon icon="solar:layers-minimalistic-bold-duotone"></iconify-icon>
                <span class="hide-menu">Buttons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="./ui-alerts.html" aria-expanded="false">
                <iconify-icon icon="solar:danger-circle-line-duotone"></iconify-icon>
                <span class="hide-menu">Alerts</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="./ui-card.html" aria-expanded="false">
                <iconify-icon icon="solar:bookmark-square-minimalistic-line-duotone"></iconify-icon>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="./ui-forms.html" aria-expanded="false">
                <iconify-icon icon="solar:file-text-line-duotone"></iconify-icon>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="./ui-typography.html" aria-expanded="false">
                <iconify-icon icon="solar:text-field-focus-line-duotone"></iconify-icon>
                <span class="hide-menu">Typography</span>
              </a>
            </li>
    

            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Forms</span>
            </li>
          

            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Bootstrap Tables</span>
            </li>
      

            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Datatables</span>
            </li>
     

            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Charts</span>
            </li>
     
          


            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Auth</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="./authentication-login.html" aria-expanded="false">
                <iconify-icon icon="solar:login-3-line-duotone"></iconify-icon>
                <span class="hide-menu">Login</span>
              </a>
            </li>
       
       

            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Extra</span>
            </li>
           
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="./icon-tabler.html" aria-expanded="false">
                <iconify-icon icon="solar:sticker-smile-circle-2-line-duotone"></iconify-icon>
                <span class="hide-menu">Tabler Icon</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="./sample-page.html" aria-expanded="false">
                <iconify-icon icon="solar:planet-3-line-duotone"></iconify-icon>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li>
          </ul>
          <div
            class="unlimited-access d-flex align-items-center hide-menu bg-secondary-subtle position-relative mb-7 mt-4 p-3 rounded-3">
         
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">

      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <!--  Header Start -->
          <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
              <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                  <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
                    <div class="notification bg-primary rounded-circle"></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                    <div class="message-body">
                      <a href="javascript:void(0)" class="dropdown-item">
                        Item 1
                      </a>
                      <a href="javascript:void(0)" class="dropdown-item">
                        Item 2
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                  <a href="https://www.wrappixel.com/templates/spike-bootstrap-admin-dashboard/?ref=376" target="_blank"
                    class="btn btn-primary">Check Pro Template</a>
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="../assets/images/profile/user1.jpg" alt="" width="35" height="35"
                        class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                          <i class="ti ti-user fs-6"></i>
                          <p class="mb-0 fs-3">My Profile</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                          <i class="ti ti-mail fs-6"></i>
                          <p class="mb-0 fs-3">My Account</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                          <i class="ti ti-list-check fs-6"></i>
                          <p class="mb-0 fs-3">My Task</p>
                        </a>
                        <a href="./authentication-login.html"
                          class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
          <!--  Header End -->
              @yield('content')
          <!--  Footer Start -->
            <!--  Content Start -->
          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="https://www.tantsoft.com/" target="_blank"
                class="pe-1 text-primary text-decoration-underline">Tantsoft</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js')}}"></script>
  <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{ asset('assets/js/dashboard.js')}}"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>