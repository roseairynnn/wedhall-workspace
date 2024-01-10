  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="home-customer">
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      
      <!-- Start Manage Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bank"></i><span>Hall</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('typehall-customer')}}">
              <i class="bi bi-circle"></i><span>Type of Hall</span>
            </a>
            <a href="#">
              <i class="bi bi-circle"></i><span>Available Hall</span>
            </a>
          </li>
          <!-- End Hall Nav -->
        </ul>
      </li>
      <!-- End Manage Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('reservation-history-customer') }}">
        <i class="bi bi-calendar-week"></i>
        <span>Reservation History</span>
        </a>
      </li>
      <!-- End Reservation History Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('aboutus-customer') }}">
        <i class="bi bi-shop"></i>
        <span>About Us</span>
        </a>
      </li>
      <!-- End About Us Nav -->
    </ul>
  </aside>
  <!-- End Sidebar-->