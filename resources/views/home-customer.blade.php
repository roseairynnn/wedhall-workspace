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
                <li class="breadcrumb-item"><a href="{{route('home-customer')}}">Home</a></li>
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
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Why choose WedHall?</h5>
    
                  <!-- Default Accordion -->
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Diverse Selection
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Explore a diverse range of wedding halls,</strong> 
                          each with its unique charm and ambiance. 
                          From intimate spaces to grand ballrooms, 
                          we have something to suit every couple's vision.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Effortless Reservation
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Our intuitive reservation system ensures a hassle-free experience. </strong> 
                          Simply browse through our listings, select your desired venue, 
                          and secure your reservation with just a few clicks.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Transparent Pricing
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Say goodbye to hidden fees and unexpected costs.</strong> 
                          WedHall provides transparent pricing, 
                          allowing you to plan your dream wedding with confidence 
                          and peace of mind.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                          Time-Saving
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>We understand the value of your time.</strong> 
                          WedHall streamlines the venue selection and reservation process, 
                          giving you more time to focus on other important aspects 
                          of your wedding preparations.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Default Accordion Example -->
    
                </div>
              </div>
            </div>

            <!--Steps of Reservation-->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Steps To Make A Reservation</h5>
    
                  <!-- Default Accordion -->
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                          Steps 1 - Browse Available Halls
                        </button>
                      </h2>
                      <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Allow users to browse through the available wedding halls.</strong> 
                          Provide high-quality images, 
                          detailed descriptions, and any special features of each hall.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          Steps 2 - Select Date and Time
                        </button>
                      </h2>
                      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Once a user has chosen a hall, </strong> 
                          Simply browse through our listings, select your desired venue, 
                          prompt them to select their preferred date and time. Use a user-friendly calendar interface for this.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                          Steps 3 - Receive Confirmation 
                        </button>
                      </h2>
                      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Immediately receive a confirmation email or SMS to the user. </strong> 
                          Include reservation details, payment confirmation, 
                          and any additional instructions they may need.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                          Steps 4 - Review Reservation
                        </button>
                      </h2>
                      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>To review the reervation user must login into their account.</strong> 
                          Here, you can view past reservations, check details, and leave feedback if desired.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Default Accordion Example -->
                </div>
              </div>
            </div>
            <!--End Steps of Reservation-->

            <div class="col-lg-4">
    
              <!-- Card with an image on top -->
              <div class="card">
                <img src="{{asset('./component/img/normal-hall.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ballroom Hall</h5>
                  <p class="card-text">
                    Dive into opulence at our Glam Ballroom. 
                    With sparkling chandeliers and classic charm, 
                    it's the perfect stage for your timeless love story.</p>
                </div>
              </div>
              <!-- End Card with an image on top -->
            
            </div>

            <div class="col-lg-4">

              <!-- Card with an image on top -->
              <div class="card">
                <img src="{{asset('./component/img/normal-hall2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Glasshouse Hall</h5>
                  <p class="card-text">
                    Step into modern romance at our Glasshouse Haven. 
                    Where glass meets green, creating an Instagram-worthy venue for your stylish celebration.</p>
                </div>
              </div>
              <!-- End Card with an image on top -->
            
            </div>
            
            <div class="col-lg-4">
    
              <!-- Card with an image on top -->
              <div class="card">
                <img src="{{asset('./component/img/normal-hall3.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Garden Hall</h5>
                  <p class="card-text">
                    Escape to chic romance at our Garden Getaway. 
                    Lush greens, blooming florals, 
                    and a touch of whimsy – the perfect backdrop for your dreamy "I dos."
                  </p>
                </div>
              </div>
              <!-- End Card with an image on top -->
            </div>
          </div>
        </section>
        <!-- End Main Content -->
    </main>
    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>