<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Type | Wedhall</title>

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
        <h1 id="dashboard">Type Hall</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('company')}}">List of Company</a></li>
            
            <li class="breadcrumb-item"><a href="#">Type Hall</a></li>


          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <!-- Start Content -->
      <section class="section">
        <div class="row">
                <div class="col-lg-8">
                    <!-- Start Display Hall -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $hall->hallname }}</h5>
                            
                            <!-- Slides with indicators | Start Display Hall Images-->
                            <div class="card-content">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('storage/hall_images/'.$hall->hallimage1) }}" class="d-block w-100" alt="Hall Image 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('storage/hall_images/'.$hall->hallimage2) }}" class="d-block w-100" alt="Hall Image 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('storage/hall_images/'.$hall->hallimage3) }}" class="d-block w-100" alt="Hall Image 3">
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
                            <!-- Slides with indicators | End Display Hall Images-->

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
                                                {{ $hall->halldescription }}
                                                <!--<strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Read More
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <!--<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.-->
                                                <table class="table table-striped">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">Hall Details</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <th scope="row">Hall Name</th>
                                                        <td>: {{$hall->hallname}}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Hall Type</th>
                                                        <td>: {{$hall->halltype}}</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Hall Capacity</th>
                                                        <td>: {{$hall->hallcapacity}} pax</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Hall Price</th>
                                                        <td>: RM{{$hall->hallprice}}.00</td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Lighting System</th>
                                                        <td>
                                                            @if($hall->lightingsystem == 1)
                                                                : <span class="badge bg-success">Available</span>
                                                            @else
                                                                : <span class="badge bg-danger">Not Available</span>
                                                            @endif 

                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Audio Visual System</th>
                                                        <td>
                                                            @if($hall->audiovisualsystem == 1)
                                                                : <span class="badge bg-success">Available</span>
                                                            @else
                                                                : <span class="badge bg-danger">Not Available</span>
                                                            @endif 

                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Parking Facilities</th>
                                                        <td>
                                                            @if($hall->parkingfacilities == 1)
                                                                : <span class="badge bg-success">Available</span>
                                                            @else
                                                                : <span class="badge bg-danger">Not Available</span>
                                                            @endif
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Hall Status</th>
                                                        <td>
                                                            @if($hall->hallstatus == 'Available')
                                                                : <span class="badge bg-success">Available</span>
                                                            @else
                                                                : <span class="badge bg-danger">Not Available</span>
                                                            @endif
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <th scope="row">Hall Address</th>
                                                        <td>
                                                            :   {{ ucwords(strtolower($hall->halladdress)) }},
                                                                {{ ucwords(strtolower($hall->hallzip)) }} {{ ucwords(strtolower($hall->hallcity)) }},
                                                                {{ ucwords(strtolower($hall->hallstate)) }}
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
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

    <!--footer & link url js-->
    @include('components.footer')
  </body>
</html>