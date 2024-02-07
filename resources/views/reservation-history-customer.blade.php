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
                <li class="breadcrumb-item active"><a href="{{route('home-customer')}}">Home</a></li>
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
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th scope="col">Reservation ID</th>
                                    <th scope="col">Customer Email</th>
                                    <th scope="col">Hall Type</th>
                                    <th scope="col">Date | Time</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody
                                    @foreach($reservations as $reservation)
                                        <tr>
                                            <th scope="row">{{ $reservation->reservationid }}</th>
                                            <td>{{ auth()->user()->email }}</td>
                                            <td>{{$reservation->hall->halltype}}</td>
                                            <td>{{ $reservation->reservationstartdate }} | {{ $reservation->reservationenddate }}</td>
                                            @if($reservation->reservationstatus == 'Approved')
                                                <td class="green"><span class="badge bg-success">{{ $reservation->reservationstatus }}</span></td>
                                            @elseif($reservation->reservationstatus == 'Rejected')
                                                <td class="red"><span class="badge bg-danger">{{ $reservation->reservationstatus }}</span></td>
                                            @elseif($reservation->reservationstatus == 'Pending')
                                                <td class="yellow"><span class="badge bg-warning">{{ $reservation->reservationstatus }}</span></td>
                                            @endif
                                            <td>
                                                <!--view report-->
                                                <a href="#">
                                                    <button type="button" class="btn btn-dark"><i class="bi bi-printer-fill"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
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