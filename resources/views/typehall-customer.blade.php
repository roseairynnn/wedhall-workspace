<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type of Hall | Wedhall</title>

    <!--link url head-->
    @include('components.head')

    <style>
        #add-hall{
            margin: 0;
            padding: 0;
            width:50px;
            height:50px;
            bottom:40px;
            right:40px;
        }

        .card{
            max-width: 80%;
            justify-content: center;
            align-content: center;
            display: flex;
            margin: 0 auto;
        }
    </style>

</head>
<body>
    <!--header-->
    <div class="header-main">
        @include('components.header')
    </div>

    <!--sidebar nav-->
    <div class="sidebar-main">
        @if(auth()->user()->role === 'admin')
            @include('components.nav')
        @elseif(auth()->user()->role === 'customer')
            @include('components.nav-customer')
        @endif
    </div>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1 id="dashboard">Type of Hall</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('home-customer')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Type of Hall</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <!-- Start Content -->
        <section>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Available Hall</h5>
  
                    <!-- General Form Elements -->
                    <form>
                        <div class="row mb-3">
                            <label for="location" class="col-sm-2 col-form-label">Where</label>
                            <div class="col-sm-10">
                                <input type="text" id="location" name="location" class="form-control">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label for="startDate" class="col-sm-2 col-form-label">Start Date</label>
                            <div class="col-sm-10">
                                <input type="date" id="startDate" name="startDate" class="form-control">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label for="endDate" class="col-sm-2 col-form-label">End Date</label>
                            <div class="col-sm-10">
                                <input type="date" id="endDate" name="endDate" class="form-control">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Start Time</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label for="endTime" class="col-sm-2 col-form-label">End Time</label>
                            <div class="col-sm-10">
                                <input type="time" id="endTime" name="endTime" class="form-control">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label for="hallcapacity" class="col-sm-2 col-form-label">Capacity</label>
                            <div class="col-sm-10">
                                <input type="number" id="hallcapacity" name="hallcapacity" class="form-control">
                            </div>
                            </div>

                            <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" id="search" name="search" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    <!-- End General Form Elements -->
                </div>
            </div>
          
          <br>
          <br>

            <div class="row">
                <!-- Start Hall A-->
                <div class="col-lg-6">
                <!-- Start Display Hall -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HALL A</h5>
                        <div class="card-content">
                            <!-- Slides with indicators -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('./component/img/normal-hall.jpeg')}}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('./component/img/normal-hall2.jpg')}}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('./component/img/normal-hall3.jpeg')}}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <!-- End Slides with indicators -->

                        <div class="card-content">
                            <!-- Start Display Hall Details -->
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Hall Description
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Services
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Hall Availability
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Display Hall Details -->

                        <div class="card-content">
                            <button class="btn btn-primary" type="submit">Edit Hall</button>
                        </div>
                    </div>
                </div>
                <!-- End Display Hall -->
                </div>

                <!-- Start Hall B-->
                <div class="col-lg-6">
                <!-- Start Display Hall -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HALL A</h5>
                        <div class="card-content">
                            <!-- Slides with indicators -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('./component/img/normal-hall.jpeg')}}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('./component/img/normal-hall2.jpg')}}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('./component/img/normal-hall3.jpeg')}}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <!-- End Slides with indicators -->

                        <div class="card-content">
                            <!-- Start Display Hall Details -->
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Hall Description
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Services
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Hall Availability
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Display Hall Details -->

                        <div class="card-content">
                            <button class="btn btn-primary" type="submit">Edit Hall</button>
                        </div>
                    </div>
                </div>
                <!-- End Display Hall -->
                </div>
            </div>
        </section>
        <!-- End Content -->
      

      
    </main>
    <!-- End #main -->

    <!--footer & link url js-->
    @include('components.footer')
    
</body>
</html>


