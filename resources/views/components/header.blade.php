

	<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('component/img/logo.png') }}" alt="">
        <div class="fw-bold">
          <div><span class="d-none d-lg-block" style="font-family: 'Rajdhani', sans-serif; font-size: 30pt;">WEDDING HALL</span></div>
          <hr style="height: 3px; margin: 0px;">
          <span class="d-none d-lg-block" style="font-family: 'Rajdhani', sans-serif;">RESERVATION SYSTEM</span>
        </div>
      </a>
      
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span><i class="bi bi-person-fill"></i></span>
            <span class="d-none d-md-block dropdown-toggle ps-2"> &nbsp; user &nbsp;</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profil-pengguna.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-dropdown-link :href="route('logout')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      <span>{{ __('Log Out') }}</span>
                  </x-dropdown-link>
              </form>

              <!--
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>-->
            </li>
          </ul>
        </li>
        <!-- End Profile Nav -->

      </ul>
    </nav>
    <!-- End Icons Navigation -->

  </header>
  <!-- End Header -->