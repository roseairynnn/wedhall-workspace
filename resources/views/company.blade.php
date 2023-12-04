<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company | Wedhall</title>

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
        @include('components.nav')
    </div>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1 id="dashboard">Company</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('company')}}">List of Company</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <!-- Start Content -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Register Company -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="border-bottom: 1px solid #dee2e6;">List of Company</h5>

                            <!-- Vertically centered Modal Register Company-->
                            <div class="modal fade" id="verticalycentered-register" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Register Company</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                    <!-- Register Company Form -->
                                    <form class="row g-3" method="POST" action="{{ route('register.company') }}"> 
                                        @csrf
                                        <div class="col-12">
                                            <label for="companyname" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="companyname" name="companyname" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="companyregistrationNo" class="form-label">Registration No</label>
                                            <input type="text" class="form-control" id="companyregistrationNo" name="companyregistrationNo" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="companynophone" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="companynophone" name="companynophone" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="companyemail" class="form-label">Email/Fax</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Company Email" aria-label="companyemail" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <!--Address-->
                                        <div class="col-12">
                                            <label for="companyaddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="alt_1" name="alt_1" required=""> <br>
                                            <input type="text" class="form-control" id="alt_2" name="alt_2" required="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="companyzip" class="form-label">ZIP</label>
                                            <input type="text" class="form-control" id="companyzip" name="companyzip" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="companycity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="companycity" name="companycity" required="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="companystate" class="form-label">State</label>
                                            <select class="form-select" id="companystate" name="companystate" required="">
                                                <!--State List -->
                                                <option value=""></option>
                                                <option value="Johor">Johor</option>
                                                <option value="Kedah">Kedah</option>
                                                <option value="Kelantan">Kelantan</option>
                                                <option value="Melaka">Melaka</option>
                                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                <option value="Pahang">Pahang</option>
                                                <option value="Perak">Perak</option>
                                                <option value="Perlis">Perlis</option>
                                                <option value="Pulau Pinang">Pulau Pinang</option>
                                                <option value="Selangor">Selangor</option>
                                                <option value="Terangganu">Terangganu</option>
                                                <option value="Sabah">Sabah</option>
                                                <option value="Serawak">Serawak</option>
                                                <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                                <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                                                <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                            <button type="submit" class="btn btn-primary" name="submit">Register</button>
                                        </div>
                                    </form>
                                    <!-- End Register Hall Form -->
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                            <!-- End Vertically centered Modal Register Hall-->

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Registration No</th>
                                    <th scope="col">Date Registered</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <!--view company-->
                                            <a href="{{ route('company-details')}}">
                                                <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            
                            <div style="display: flex; justify-content: flex-end; padding: 0px 8px;">
                                <a type="button" href="#" class="btn btn-dark">Export <i class="bi bi-download"></i></a>
                                &nbsp; &nbsp;
                                <button type="button" id="add-hall" class="btn btn-primary" style="border-radius: 60%;" data-bs-toggle="modal" data-bs-target="#verticalycentered-register">
                                    <i class="bx bx-plus-medical"></i>
                                </button>  
                            </div>
                        </div>
                    </div>
                    <!-- End Register Company -->


                    
                </div>
            </div>
        </section>
        <!-- End Content -->
    </main>

    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>