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
                    <li class="breadcrumb-item"><a href="{{ route('company-details', ['id' => $company->id]) }}">Company Details</a></li>
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
            
                            <!-- General Form Elements -->
                            <form class="companydetails">
                                <!-- Display other company details dynamically -->
                                <!-- For example: Registration No, Phone Number, Email/Fax, Address, Date Registration, Staff Roster, etc. -->

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
                                    <input type="text" class="form-control" id="companyaddress" name="companyaddress" value=": &nbsp; {{ $company->companyaddress }}" style="border-style: none; background-color: #fff; border: none; height: 100%;" disabled="">
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
                        </div>
                    </div>                        
                    <!-- End Company Details -->
                    
                    <!-- Start List of Hall & Hall Registration -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="border-bottom: 1px solid #dee2e6;">List of Hall</h5>

                            <!-- Vertically centered Modal Register Hall-->
                            <div class="modal fade" id="verticalycentered-register" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Register Hall</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                    <!-- Register Hall Form -->
                                    <form class="row g-3" method="POST" action="./includes/daftar-stesen.inc.php"> 
                                        <div class="col-12">
                                            <label for="hallname" class="form-label">Hall Name</label>
                                            <input type="text" class="form-control" id="hallname" name="hallname" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="halltype" class="form-label">Hall Type</label>
                                            <select class="form-select" aria-label="Default select example">
                                              <option selected="">Select</option>
                                              <option value="Ballrooom">Ballrooom</option>
                                              <option value="Glasshouse">Glasshouse</option>
                                              <option value="Garden Halls">Garden Halls</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="paxcapacity" class="form-label">Capacity</label>
                                            <input type="number" class="form-control" id="paxcapacity" name="paxcapacity" required>
                                        </div>
                                        <div class="col-12">
                                          <label for="services" class="form-label">Services:</label>
                                          <fieldset class="row mb-3">
                                              <legend class="col-form-label col-sm-2 pt-0" style="width: 31%">Lighting System</legend>
                                              <div class="col-sm-10" style="width: 40%">
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="lightingRadios" id="lightingAvailable" value="Available" checked="">
                                                      <label class="form-check-label" for="lightingAvailable">
                                                          Available
                                                      </label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="lightingRadios" id="lightingNotAvailable" value="Not Available">
                                                      <label class="form-check-label" for="lightingNotAvailable">
                                                          Not Available
                                                      </label>
                                                  </div>
                                              </div>
                                          </fieldset>                                            
                                      </div>
                                      
                                      <div class="col-12">
                                          <fieldset class="row mb-3">
                                              <legend class="col-form-label col-sm-2 pt-0" style="width: 31%">Sound System</legend>
                                              <div class="col-sm-10" style="width: 40%">
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="soundRadios" id="soundAvailable" value="Available" checked="">
                                                      <label class="form-check-label" for="soundAvailable">
                                                          Available
                                                      </label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="soundRadios" id="soundNotAvailable" value="Not Available">
                                                      <label class="form-check-label" for="soundNotAvailable">
                                                          Not Available
                                                      </label>
                                                  </div>
                                              </div>
                                          </fieldset>                                            
                                      </div>  
                                      
                                      <div class="col-12">
                                          <fieldset class="row mb-3">
                                              <legend class="col-form-label col-sm-2 pt-0" style="width: 31%">Catering Services</legend>
                                              <div class="col-sm-10" style="width: 40%">
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="cateringRadios" id="cateringAvailable" value="Available" checked="">
                                                      <label class="form-check-label" for="cateringAvailable">
                                                          Available
                                                      </label>
                                                  </div>
                                                  <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="cateringRadios" id="cateringNotAvailable" value="Not Available">
                                                      <label class="form-check-label" for="cateringNotAvailable">
                                                          Not Available
                                                      </label>
                                                  </div>
                                              </div>
                                          </fieldset>              
                                      </div>                                      
                                        <div class="col-12">
                                            <label for="pricerange" class="form-label">Price Range</label>       
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">RM</span>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest MYR)">
                                                <span class="input-group-text">.00</span>
                                            </div>  
                                        </div>
                                        <div class="col-12">
                                            <label for="description" class="form-label">Hall Description</label>    
                                            <textarea class="form-control" style="height: 100px"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label for="fileupload" class="form-label">Image Upload</label>
                                            <input class="form-control" type="file" id="formFile">
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
                                    <th scope="col">Hall ID</th>
                                    <th scope="col">Hall Name</th>
                                    <th scope="col">Hall Type</th>
                                    <th scope="col">Hall Capacity</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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