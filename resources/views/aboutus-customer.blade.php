<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Wedding Hall</title>

    <!--link url head-->
    @include('components.head')

</head>
<body>
    <!--header-->
    <div class="header-main">
        @include('components.header')
    </div>

    <!--sidebar nav-->
    <div class="sidebar-main">
        @include('components.nav-customer')
    </div>

    <!--main-->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 id="dashboard" >About Us</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home-customer')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="#dashboard">About Us</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <!-- Start About Us Content -->
        <section class="section contact">
            <div class="row gy-4">
              <div class="col-xl-6">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="info-box card">
                      <i class="bi bi-geo-alt"></i>
                      <h3>Address</h3>
                      <p>A108 Adam Street,<br>New York, NY 535022</p>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="info-box card">
                      <i class="bi bi-telephone"></i>
                      <h3>Call Us</h3>
                      <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="info-box card">
                      <i class="bi bi-envelope"></i>
                      <h3>Email Us</h3>
                      <p>info@example.com<br>contact@example.com</p>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="info-box card">
                      <i class="bi bi-clock"></i>
                      <h3>Open Hours</h3>
                      <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6">
                <div class="card p-4">
                  <form action="forms/contact.php" method="post" class="php-email-form">
                    <div class="row gy-4">
      
                      <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                      </div>
      
                      <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                      </div>
      
                      <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                      </div>
      
                      <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                      </div>
      
                      <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
      
                        <button type="submit">Send Message</button>
                      </div>
      
                    </div>
                  </form>
                </div>
              </div>
            </div>
      
        </section>
        <!-- End About Us Content -->

        
    </main>
    <!-- End Main Content -->

    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>