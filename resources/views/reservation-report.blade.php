<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation History | Wedhall</title>

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
            <h1 id="dashboard">Reservation History</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Reservation History</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <!-- Start Content -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="border-bottom: 1px solid #dee2e6;">List of Reservation</h5>

                            <!-- Vertically centered Modal Update Reservation-->
                            @foreach($reservations as $reservation)
                                <div class="modal fade" id="verticalycentered-updatereservation{{$reservation->reservationid}}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Update Reservation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <!-- Update Reservation Form -->
                                        <form class="row g-3" method="POST" action="{{ route('update.reservation', ['reservationid' => $reservation->reservationid]) }}" enctype="multipart/form-data"> 
                                            @csrf
                                            <div class="col-12">
                                                <label for="fullname" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="fullname" name="fullname" value="{{$reservation->user->fullname}}" readonly>
                                            </div>
                                            <div class="col-md-7">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" value="{{$reservation->user->email}}" readonly>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" value="{{$reservation->user->phone}}" readonly>
                                            </div>
                                            <hr>
                                            <div class="col-12">
                                                <label for="hallname" class="form-label">Hall Name</label>
                                                <input type="text" class="form-control" id="hallname" name="hallname" value="{{$reservation->hall->hallname}}" readonly>
                                            </div>
                                            <div class="col-12">
                                                <label for="halltype" class="form-label">Hall Type</label>
                                                <input type="text" class="form-control" id="halltype" name="halltype" value="{{$reservation->hall->halltype}}" readonly>
                                            </div>
                                            <div class="col-12">
                                                <label for="hallcapacity" class="form-label">Capacity</label>
                                                <div class="input-group mb-3">                                            
                                                <input type="number" class="form-control" id="hallcapacity" style="background-color: white;" name="hallcapacity" value="{{$reservation->hall->hallcapacity}}" readonly>
                                                <span class="input-group-text">Pax</span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-md-6 mb-2">
                                                <label for="reservationstartdate" class="form-label">Date (Start)</label>       
                                                <input type="date" class="form-control" aria-label="Start Date of Reservation" name="reservationstartdate" id="reservationstartdate" value="{{$reservation->reservationstartdate}}" readonly>                                               
                                            </div>
                                            <div class="col-md-6">
                                                <label for="reservationenddate" class="form-label">Date (End)</label>       
                                                <input type="date" class="form-control" aria-label="End Date of Reservation" name="reservationenddate" id="reservationenddate" value="{{$reservation->reservationenddate}}" readonly>                                               
                                            </div>
                                            <div class="col-md-8">
                                                <label for="hallprice" class="form-label">Price Range (Day)</label>       
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">RM</span>
                                                    <input type="text" class="form-control" style="background-color: white;" aria-label="Amount (to the nearest MYR)" name="hallprice" id="hallprice" value="{{$reservation->hall->hallprice}}" readonly>
                                                    <span class="input-group-text">.00</span>
                                                </div>  
                                            </div>
                                            <div class="col-md-4">
                                                <label for="reservationdays" class="form-label"><font color="red">*</font></label>       
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" style="background-color: white;" name="reservationdays" id="reservationdays" value="{{$reservation->reservationdays}}" readonly>
                                                    <span class="input-group-text">Days</span> 
                                                </div>  
                                            </div>
                                            <div class="col-12">
                                                <label for="reservationamount" class="form-label">Amount</label>       
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">RM</span>
                                                    <input type="text" class="form-control" style="background-color: white;" name="reservationamount" id="reservationamount" value="{{$reservation->reservationamount}}" readonly>
                                                </div>  
                                            </div>
                                            <hr>
                                            <div class="col-20">
                                                <label for="reservationstatus" class="col-sm-2 col-form-label">Validation</label>
                                                <select class="form-select" id="reservationstatus" name="reservationstatus" aria-label="Validation" style="margin-bottom:2rem;">
                                                    <option selected value="{{$reservation->reservationstatus}}">{{$reservation->reservationstatus}}</option>
                                                    <option style="color: green;" value="Approved">Approved</option>
                                                    <option style="color: red;" value="Rejected">Rejected</option>
                                                </select>
                                            </div>
                                        
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                                <button type="submit" class="btn btn-dark" name="submit">Update</button>
                                            </div>
                                        </form>
                                        <!-- End Update Reservation Form -->
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- End Vertically centered Modal Update Reservation-->

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th scope="col">Reservation ID</th>
                                    <th scope="col">Customer Email</th>
                                    <th scope="col">Hall Type</th>
                                    <th scope="col">Start Date | End Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody
                                    @foreach($reservations as $reservation)
                                        <tr>
                                            <th scope="row">{{ $reservation->reservationid }}</th>
                                            <td>{{ $reservation->user->email }}</td>
                                            <td>{{ $reservation->hall->halltype }}</td>
                                            <td>{{ $reservation->reservationstartdate }} | {{ $reservation->reservationenddate }}</td>
                                            @if($reservation->reservationstatus == 'Approved')
                                                <td class="green"><span class="badge bg-success">{{ $reservation->reservationstatus }}</span></td>
                                            @elseif($reservation->reservationstatus == 'Rejected')
                                                <td class="red"><span class="badge bg-danger">{{ $reservation->reservationstatus }}</span></td>
                                            @elseif($reservation->reservationstatus == 'Pending')
                                                <td class="yellow"><span class="badge bg-warning">{{ $reservation->reservationstatus }}</span></td>
                                            @endif
                                            <td>
                                                <!--Update report-->
                                                <button type="button" id="update-reservation-report{{$reservation->reservationid}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered-updatereservation{{$reservation->reservationid}}"><i class="bi bi-pencil-square"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            
                            <div style="display: flex; justify-content: flex-end; padding: 0px 8px;">
                                <a type="button" href="#" class="btn btn-dark">Export <i class="bi bi-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content -->
    </main>

    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>