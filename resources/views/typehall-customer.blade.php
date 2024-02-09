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
                                <label for="hallcapacity" class="col-sm-2 col-form-label">Capacity</label>
                                <div class="col-sm-10">
                                    <input type="number" id="hallcapacity" name="hallcapacity" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="halltype" class="col-sm-2 col-form-label">Capacity</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Select Hall Type</option>
                                        <option value="Ballroom">Ballroom</option>
                                        <option value="Garden Hall">Garden Hall</option>
                                        <option value="Glasshouse">Glasshouse</option>
                                    </select>
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
                @foreach($halls as $hall)
                <div style="margin-bottom: 40px" class="col-lg-6">
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
                                            <img style="height: 180px;" src="{{ asset('storage/hall_images/'.$hall->hallimage1) }}" class="d-block w-100" alt="Hall Image 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img style="height: 180px;" src="{{ asset('storage/hall_images/'.$hall->hallimage2) }}" class="d-block w-100" alt="Hall Image 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img style="height: 180px;" src="{{ asset('storage/hall_images/'.$hall->hallimage3) }}" class="d-block w-100" alt="Hall Image 3">
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
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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

                            <!-- Vertically centered Modal Register Hall-->
                            <div class="modal fade" id="verticalycentered-reservehall" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Reserve {{$hall->hallname}} </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <!-- Register Hall Form -->
                                    <form class="row g-3" method="POST" action="{{ route('reservation.add', ['hallid' => $hall->hallid]) }}" enctype="multipart/form-data"> 
                                        @csrf
                                        <div class="col-12">
                                            <label for="fullname" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ auth()->user()->fullname }}" readonly>
                                        </div>
                                        <div class="col-md-7">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone }}" readonly>
                                        </div>
                                        <hr>
                                        <div class="col-12">
                                            <label for="hallname" class="form-label">Hall Name</label>
                                            <input type="text" class="form-control" id="hallname" name="hallname" value="{{$hall->hallname}}" readonly>
                                        </div>
                                        <div class="col-12">
                                            <label for="halltype" class="form-label">Hall Type</label>
                                            <input type="text" class="form-control" id="halltype" name="halltype" value="{{$hall->halltype}}" readonly>
                                        </div>
                                        <div class="col-12">
                                            <label for="hallcapacity" class="form-label">Capacity</label>
                                            <div class="input-group mb-3">                                            
                                            <input type="number" class="form-control" id="hallcapacity" style="background-color: white;" name="hallcapacity" value="{{$hall->hallcapacity}}" readonly>
                                            <span class="input-group-text">Pax</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6 mb-2">
                                            <label for="reservationstartdate" class="form-label">Date (Start)</label>       
                                            <input type="date" class="form-control" aria-label="Start Date of Reservation" name="reservationstartdate" id="reservationstartdate" value="" required>                                               
                                        </div>
                                        <div class="col-md-6">
                                            <label for="reservationenddate" class="form-label">Date (End)</label>       
                                            <input type="date" class="form-control" aria-label="End Date of Reservation" name="reservationenddate" id="reservationenddate" value="" required>                                               
                                        </div>
                                        <div class="col-md-8">
                                            <label for="hallprice" class="form-label">Price Range (Day)</label>       
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">RM</span>
                                                <input type="text" class="form-control" style="background-color: white;" aria-label="Amount (to the nearest MYR)" name="hallprice" id="hallprice" value="{{$hall->hallprice}}" readonly>
                                                <span class="input-group-text">.00</span>
                                            </div>  
                                        </div>
                                        <div class="col-md-4">
                                            <label for="reservationdays" class="form-label"><font color="red">*</font></label>       
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" style="background-color: white;" name="reservationdays" id="reservationdays" value="" readonly>
                                                <span class="input-group-text">Days</span> 
                                            </div>  
                                        </div>
                                        <div class="col-12">
                                            <label for="reservationamount" class="form-label">Amount</label>       
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">RM</span>
                                                <input type="text" class="form-control" style="background-color: white;" name="reservationamount" id="reservationamount" value="" readonly>
                                            </div>  
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                            <button type="submit" class="btn btn-dark" name="submit">Proceed</button>
                                        </div>
                                    </form>
                                    <!-- End Register Hall Form -->
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                            <!-- End Vertically centered Modal Register Hall-->
                            
                            <div class="card-content">                    
                                <button type="button" id="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered-reservehall">
                                    Reserve Hall
                                </button>
                            </div>
                        </div>
                    </div>
                    
                <!-- End Display Hall -->
                </div>
                @endforeach
            </div>
        </section>
        <!-- End Content -->
      

      
    </main>
    <!-- End #main -->

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const startDateInput = document.getElementById('reservationstartdate');
            const endDateInput = document.getElementById('reservationenddate');
            const reservationDaysInput = document.getElementById('reservationdays');
            const hallPriceInput = document.getElementById('hallprice');
            const reservationAmountInput = document.getElementById('reservationamount');

            function calculateDays() {
                const startDate = new Date(startDateInput.value);
                const endDate = new Date(endDateInput.value);
                const timeDifference = Math.abs(endDate.getTime() - startDate.getTime());
                const daysDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));
                reservationDaysInput.value = daysDifference;

                calculateAmount(); // Call calculateAmount after updating reservationDays
            }

            function calculateAmount() {
                const hallPrice = parseFloat(hallPriceInput.value);
                const reservationDays = parseInt(reservationDaysInput.value);

                if (!isNaN(hallPrice) && !isNaN(reservationDays)) {
                    reservationAmountInput.value = (hallPrice * reservationDays).toFixed(2);
                }
            }

            startDateInput.addEventListener('change', calculateDays);
            endDateInput.addEventListener('change', calculateDays);
            hallPriceInput.addEventListener('change', calculateAmount);
            reservationDaysInput.addEventListener('change', calculateAmount);
        });
    </script>

    <!--footer & link url js-->
    @include('components.footer')
    
</body>
</html>


