<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title> Admin Dashboard </title>

  @include('backend.partials.styles')

</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">

    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="{{ url('/admin') }}">
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
              height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
              </g>
            </svg>
            <span class="brand-name"> B.bazar Admin </span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">

            <li class="has-sub active expand">
              {{-- <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span> <b class="caret"></b>
              </a> --}}
              <a class="active" href="{{ route('admin.index') }}">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span> <b></b>

              </a>
              {{-- <ul class="collapse" id="dashboard" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li>
                    <a class="sidenav-item-link" href="index.html">
                      <span class="nav-text">Ecommerce</span>

                    </a>
                  </li>

                  <li>
                    <a class="sidenav-item-link" href="analytics.html">
                      <span class="nav-text">Analytics</span>
                      <span class="badge badge-success">new</span>
                    </a>
                  </li>
                </div>
              </ul> --}}
            </li>






            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#manageProducts"
                aria-expanded="false" aria-controls="manageProducts">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Products</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="manageProducts" data-parent="#sidebar-menu">
                <div class="sub-menu">



                  <li>
                    <a class="active" href="{{ route('admin.products') }}">
                      <span class="nav-text">Manage Products</span>

                    </a>
                  </li>


                  <li>
                    <a class="active" href="{{ route('admin.product.create') }}">
                      <span class="nav-text">Create Product</span>

                    </a>
                  </li>


                  <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                      data-target="#authentication" aria-expanded="false" aria-controls="authentication">
                      <span class="nav-text">Authentication</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="authentication">
                      <div class="sub-menu">

                        <li>
                          <a href="sign-in.html">Sign In</a>
                        </li>

                        <li>
                          <a href="sign-up.html">Sign Up</a>
                        </li>

                      </div>
                    </ul>
                  </li>




                  <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                      aria-expanded="false" aria-controls="others">
                      <span class="nav-text">Others</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="others">
                      <div class="sub-menu">

                        <li>
                          <a href="invoice.html">invoice</a>
                        </li>

                        <li>
                          <a href="error.html">Error</a>
                        </li>

                      </div>
                    </ul>
                  </li>



                </div>
              </ul>
            </li>






            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#categories"
                aria-expanded="false" aria-controls="categories">
                <i class="mdi mdi-animation"></i>
                <span class="nav-text">Categories</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="categories" data-parent="#sidebar-menu">
                <div class="sub-menu">



                  <li>
                    <a class="active" href="{{ route('admin.categories') }}">
                      <span class="nav-text">Manage Categories</span>

                    </a>
                  </li>


                  <li>
                    <a class="active" href="{{ route('admin.category.create') }}">
                      <span class="nav-text">Create Categories</span>

                    </a>
                  </li>




                </div>
              </ul>
            </li>













            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#brands"
                aria-expanded="false" aria-controls="brands">
                <i class="mdi mdi-animation"></i>
                <span class="nav-text">Brands</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="brands" data-parent="#sidebar-menu">
                <div class="sub-menu">



                  <li>
                    <a class="active" href="{{ route('admin.brands') }}">
                      <span class="nav-text">Manage brands</span>

                    </a>
                  </li>


                  <li>
                    <a class="active" href="{{ route('admin.brand.create') }}">
                      <span class="nav-text">Create brands</span>

                    </a>
                  </li>



                </div>
              </ul>
            </li>



            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#divisions"
                aria-expanded="false" aria-controls="divisions">
                <i class="mdi mdi-animation"></i>
                <span class="nav-text">Divisions</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="divisions" data-parent="#sidebar-menu">
                <div class="sub-menu">



                  <li>
                    <a class="active" href="{{ route('admin.divisions') }}">
                      <span class="nav-text">Manage divisions</span>

                    </a>
                  </li>


                  <li>
                    <a class="active" href="{{ route('admin.division.create') }}">
                      <span class="nav-text">Create divisions</span>

                    </a>
                  </li>



                </div>
              </ul>
            </li>




            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#districts"
                aria-expanded="false" aria-controls="districts">
                <i class="mdi mdi-animation"></i>
                <span class="nav-text">Districts</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="districts" data-parent="#sidebar-menu">
                <div class="sub-menu">



                  <li>
                    <a class="active" href="{{ route('admin.districts') }}">
                      <span class="nav-text">Manage districts</span>

                    </a>
                  </li>


                  <li>
                    <a class="active" href="{{ route('admin.district.create') }}">
                      <span class="nav-text">Create districts</span>

                    </a>
                  </li>



                </div>
              </ul>
            </li>



          </ul>

        </div>
      </div>
    </aside>



    <div class="page-wrapper">
      <!-- Header -->
      <header class="main-header " id="header">

        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>

          <div class="d-none d-lg-inline-block" style="display: block; margin: 0 13%;">

              <h3>Welcome to your Admin Panel <span><a href="{!! route('index') !!}" class="mb-1 btn btn-primary" target="_blank">Visit Site</a></span></h3>
            </div>


          <div class="navbar-right ">
            <ul class="nav navbar-nav">

              <li class="dropdown notifications-menu">
                <button class="dropdown-toggle" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown-header">You have 5 notifications</li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-account-plus"></i> New user registered
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10
                        AM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-account-remove"></i> User deleted
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07
                        AM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12
                        PM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-account-supervisor"></i> New client
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10
                        AM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-server-network-off"></i> Server overloaded
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05
                        AM</span>
                    </a>
                  </li>
                  <li class="dropdown-footer">
                    <a class="text-center" href="#"> View All </a>
                  </li>
                </ul>
              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src={{asset("assets/admin/img/user/user.png")}} class="user-image" alt="User Image" />
                  <span class="d-none d-lg-inline-block">Abdus Salam</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->
                  <li class="dropdown-header">
                    <img src={{asset("assets/admin/img/user/user.png")}} class="img-circle" alt="User Image" />
                    <div class="d-inline-block">
                      Abdus Salam <small class="pt-1">abdus@gmail.com</small>
                    </div>
                  </li>

                  <li>
                    <a href="profile.html">
                      <i class="mdi mdi-account"></i> My Profile
                    </a>
                  </li>
                  <li>
                    <a href="email-inbox.html">
                      <i class="mdi mdi-email"></i> Message
                    </a>
                  </li>
                  <li>
                    <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                  </li>
                  <li>
                    <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                  </li>

                  <li class="dropdown-footer">
                    <a href="{{ route('admin.logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>


      </header>

      @yield('content')

      <div class="content-wrapper">
        <div class="content">
          <!-- Top Statistics -->
        </div>
      </div>

      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <h1>Footer</h1>
        </div>

      </footer>
    </div>
  </div>

@include('backend.partials.scripts')

{{-- Data Table Script --}}
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>

</body>
</html>