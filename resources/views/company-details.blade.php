<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details | Wedhall</title>
     <!--link url head-->
    @include('components.head')
    <style>
        #add-hall {
            margin: 0;
            padding: 0;
            width: 50px;
            height: 50px;
            bottom: 40px;
            right: 40px;
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
            <h1 id="dashboard">Company Details - {{ $company->companyname }}</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="{{ route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('company')}}">List of Company</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('company-details', ['companyid' => $company->companyid]) }}">Company Details</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <!-- Start Content -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Company Details -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="border-bottom: 1px solid #dee2e6;">{{ $company->companyname }}</h5>

                            <!-- Vertically centered Modal Update Company-->
                            <div class="modal fade" id="verticalycentered-register" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Update Company</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <!-- Register Company Form -->
                                    <form class="row g-3" method="POST" action="{{ route('update.company', ['companyid' => $company->companyid]) }}"> 
                                        @csrf
                                        <div class="col-12">
                                            <label for="companyname" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="companyname" name="companyname" placeholder="{{ $company->companyname }}" value="{{ $company->companyname }}">
                                        </div>
                                        <div class="col-12">
                                            <label for="companyregistrationNo" class="form-label">Registration No</label>
                                            <input type="text" class="form-control" id="companyregistrationNo" name="companyregistrationNo" placeholder="{{ $company->companyregistrationNo }}" value="{{ $company->companyregistrationNo }}">
                                        </div>
                                        <div class="col-12">
                                            <label for="companynophone" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="companynophone" name="companynophone" placeholder="{{ $company->companynophone }}" value="{{ $company->companynophone }}" >
                                        </div>
                                        <div class="col-12">
                                            <label for="companyemail" class="form-label">Email/Fax</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" id="companyemail" name="companyemail" placeholder="Company Email" aria-label="companyemail" aria-describedby="basic-addon1" placeholder="{{ $company->companyemail }}" value="{{ $company->companyemail }}" >
                                            </div>
                                        </div>
                                        <!--Address-->
                                        <div class="col-12">
                                            <label for="companyaddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="companyaddress" name="companyaddress" placeholder="{{ $company->companyaddress }}" value="{{ $company->companyaddress }}" >
                                        </div>
                                        <div class="col-md-3" >
                                            <label for="companyzip" class="form-label">ZIP</label>
                                            <input type="text" class="form-control" id="companyzip" name="companyzip" placeholder="{{ $company->companyzip }}" value="{{ $company->companyzip }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="companycity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="companycity" name="companycity" placeholder="{{ $company->companycity }}" value="{{ $company->companycity }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="companystate" class="form-label">State</label>
                                            <select class="form-select" id="companystate" name="companystate" >
                                                <!--State List -->
                                                <option value="{{ $company->companystate}}" selected>{{ $company->companystate}}</option>
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
                                                <option value="Sarawak">Sarawak</option>
                                                <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                                <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                                                <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                        </div>
                                    </form>
                                    <!-- End Register Hall Form -->
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End Vertically centered Modal Update Company-->

                            <!-- General Form Elements -->
                            <form class="companydetails">
                                <div class="row mb-3">
                                    <label for="companyname" class="col-sm-2 col-form-label">Company Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="companyname" name="companyname" value=": &nbsp; {{ $company->companyname }}" style="border-style: none; background-color: #fff; border: none;" disabled="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="companyregistrationNo" class="col-sm-2 col-form-label">Registration No.</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="companyregistrationNo" name="companyregistrationNo" value=": &nbsp; {{ $company->companyregistrationNo }}" style="border-style: none; background-color: #fff; border: none;" disabled="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="companynophone" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                         <input type="text" class="form-control" id="companynophone" name="companynophone" value=": &nbsp; {{ $company->companynophone }}" style="border-style: none; background-color: #fff; border: none;" disabled="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="companyemail" class="col-sm-2 col-form-label">Email/Fax</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="companyemail" name="companyemail" value=": &nbsp; {{ $company->companyemail }}" style="border-style: none; background-color: #fff; border: none;" disabled="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="companyaddress" class="col-sm-2 col-form-label">Address</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="companyaddress" name="companyaddress" value=": &nbsp; {{ $company->companyaddress }}, {{$company->companystate}}" style="border-style: none; background-color: #fff; border: none; height: 100%;" disabled="">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="companydatereg" class="col-sm-2 col-form-label">Date Registration</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="companydatereg" name="companydatereg" value=": &nbsp; {{ $company->created_at }}" style="border-style: none; background-color: #fff; border: none;" disabled="">
                                  </div>
                                </div>
                            </form>
                            <!-- End General Form Elements -->

                            <button class="btn btn-primary" id="update-company" type="submit" data-bs-toggle="modal" data-bs-target="#verticalycentered-register">Edit Company Details</button>
                            
                        </div>
                    </div>                        
                    <!-- End Company Details -->

                    <!-- Start List of Hall & Hall Registration -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="border-bottom: 1px solid #dee2e6;">List of Hall</h5>
                            <!-- Vertically centered Modal Register Hall-->
                            <div class="modal fade" id="verticalycentered-registerhall" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Register Hall</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <!-- Register Hall Form -->
                                    <form class="row g-3" method="POST" action="{{ route('hall.add', ['id' => $company->companyid]) }}" enctype="multipart/form-data"> 
                                        @csrf
                                        <div class="col-12">
                                            <label for="hallname" class="form-label">Hall Name</label>
                                            <input type="text" class="form-control" id="hallname" name="hallname" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="halltype" class="form-label">Hall Type</label>
                                            <select class="form-select" aria-label="Default select example" id="halltype" name="halltype">
                                              <option selected="">Select</option>
                                              <option value="Ballrooom">Ballrooom</option>
                                              <option value="Glasshouse">Glasshouse</option>
                                              <option value="Garden Halls">Garden Halls</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="hallcapacity" class="form-label">Capacity</label>
                                            <input type="number" class="form-control" id="hallcapacity" name="hallcapacity" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="services" class="form-label">Services:</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lightingsystem" id="lightingsystem">
                                                <label class="form-check-label" for="lightingsystem">Lighting System</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="audiovisualsystem" id="audiovisualsystem">
                                                <label class="form-check-label" for="audiovisualsystem">Audio Visual System</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="parkingfacilities" id="parkingfacilities">
                                                <label class="form-check-label" for="parkingfacilities">Parking Facilities</label>
                                            </div>                                          
                                        </div>              
                                        <div class="col-12">
                                            <label for="hallprice" class="form-label">Price Range</label>       
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">RM</span>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest MYR)" name="hallprice" id="hallprice">
                                                <span class="input-group-text">.00</span>
                                            </div>  
                                        </div>
                                        <div class="col-12">
                                            <label for="halldescription" class="form-label">Hall Description</label>    
                                            <textarea class="form-control" style="height: 100px" id="halldescription" name="halldescription"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label for="hallimage1" class="form-label">Image Upload</label>
                                            <input class="form-control" type="file" id="hallimage1" name="hallimage1">
                                        </div>
                                        <div class="col-12">
                                            <label for="hallimage2" class="form-label">Image Upload</label>
                                            <input class="form-control" type="file" id="hallimage2" name="hallimage2">
                                        </div>
                                        <div class="col-12">
                                            <label for="hallimage3" class="form-label">Image Upload</label>
                                            <input class="form-control" type="file" id="hallimage3" name="hallimage3">
                                        </div>
                                        <!--Address-->
                                        <div class="col-12">
                                            <label for="halladdress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="halladdress" name="halladdress">
                                        </div>
                                        <div class="col-md-3" >
                                            <label for="hallzip" class="form-label">ZIP</label>
                                            <input type="text" class="form-control" id="hallzip" name="hallzip">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="hallcity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="hallcity" name="hallcity">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="hallstate" class="form-label">State</label>
                                            <select class="form-select" id="hallstate" name="hallstate" >
                                                <!--State List -->
                                                <option selected="">Select</option>
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
                                                <option value="Sarawak">Sarawak</option>
                                                <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                                <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                                                <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
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
                                    <th scope="col">Hall Name</th>
                                    <th scope="col">Hall Type</th>
                                    <th scope="col">Hall Capacity</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($company->halls as $hall) 
                                    <tr>
                                        <th scope="row">{{ $hall->hallid }}</th>
                                        <td>{{ $hall->hallname }}</td>
                                        <td>{{ $hall->halltype }}</td>
                                        <td>{{ $hall->hallcapacity }}</td>
                                        <td>
                                          <!--view report-->
                                          <a href="#">
                                              <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                          </a>
                                          <!--Delete Hall-->
                                          <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                          <!--Update report
                                          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered-update"><i class="bi bi-pencil-square"></i></button>-->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            
                            <div style="display: flex; justify-content: flex-end; padding: 0px 8px;">
                                <a type="button" href="#" class="btn btn-dark">Export <i class="bi bi-download"></i></a>
                                &nbsp; &nbsp;
                                <button type="button" id="add-hall" class="btn btn-primary" style="border-radius: 60%;" data-bs-toggle="modal" data-bs-target="#verticalycentered-registerhall">
                                    <i class="bx bx-plus-medical"></i>
                                </button>  
                            </div>
                        </div>
                    </div>
                    <!-- End List of Hall & Hall Registration -->

                </div>
            </div>
        </section>
        <!-- End Content -->
    </main>
    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>