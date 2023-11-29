  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="home">
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bank"></i><span>Hall</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#typehall.blade.php"> <!-- link to typehall.blade.php PLEASE INSERT THE SRC WITH THE CORRECT DIRECTORY-->
              <i class="bi bi-circle"></i><span>Type Hall</span>
            </a>
          </li>
          <li>
            <a href="#managehall.blade.php"> <!-- link to managehall.blade.php PLEASE INSERT THE SRC WITH THE CORRECT DIRECTORY-->
              <i class="bi bi-circle"></i><span>Manage Hall</span>
            </a>
          </li>
        </ul>
      </li><!-- End Hall Nav -->

      <li class="nav-item">
          <a class="nav-link collapsed" href="#">
            <i class="bi bi-calendar-week"></i>
            <span>Reservation History</span>
          </a>
      </li><!-- End Reservation History Nav -->

      <li class="nav-item">
          <a class="nav-link collapsed" href="#">
            <i class="bi bi-shop"></i>
            <span>About Us</span>
          </a>
      </li><!-- End About Us Nav -->
    </ul>

  </aside><!-- End Sidebar-->