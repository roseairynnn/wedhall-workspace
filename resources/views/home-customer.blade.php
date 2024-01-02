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
            <h1 id="dashboard" >Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item active"><a href="#dashboard">Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <!-- Start Main Content -->
        <section class="section">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center">Welcome to WedHall - Your Premier Wedding Hall Reservation System!</h5>
              <p style="text-align: center">We are delighted to extend a warm welcome to you as you embark on a seamless journey through WedHall, 
              your go-to destination for effortless and enchanting wedding hall reservations. 
              At WedHall, we understand the significance of your special day and the importance of 
              finding the perfect venue to create lasting memories.
              
              Our user-friendly platform is designed with you in mind, 
              offering a curated selection of exquisite wedding halls and venues to suit every style and preference. 
              Whether you envision a romantic garden ceremony, a sophisticated ballroom reception, 
              or a trendy urban celebration, WedHall has the ideal setting waiting for you.</p>
            </div>
          </div>
          <div class="row align-items-top">
            <div class="col-lg-4">
    
              <!-- Card with an image on top -->
              <div class="card">
                <img src="{{asset('./component/img/normal-hall.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on top</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <!-- End Card with an image on top -->
            
            </div>

            <div class="col-lg-4">

              <!-- Card with an image on top -->
              <div class="card">
                <img src="{{asset('./component/img/normal-hall2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on top</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <!-- End Card with an image on top -->
            
            </div>
            
            <div class="col-lg-4">
    
              <!-- Card with an image on top -->
              <div class="card">
                <img src="{{asset('./component/img/normal-hall3.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on top</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <!-- End Card with an image on top -->
    
              <!-- Card with an image on bottom -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card with an image on bottom</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <img src="assets/img/card.jpg" class="card-img-bottom" alt="...">
              </div><!-- End Card with an image on bottom -->
    
            </div>
    
          </div>
        </section>
        <!-- End Main Content -->
    </main>



    
    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>