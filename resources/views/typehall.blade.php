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
        @include('components.nav')
    </div>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1 id="dashboard">Type Hall</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#home">Home</a></li>
                <li class="breadcrumb-item"><a href="#">List of Hall</a></li>
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
                                    <form class="row g-3" method="POST" action="./includes/daftar-stesen.inc.php"> 
                                        <div class="col-12">
                                            <label for="companyname" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="companyname" name="companyname" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="hallvenues" class="form-label">Hall Venues</label>
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
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="available" value="Available" checked="">
                                                    <label class="form-check-label" for="available">
                                                      Available
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="notavailable" value="Not Available" checked="">
                                                    <label class="form-check-label" for="notavailable">
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
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="available" value="Available" checked="">
                                                    <label class="form-check-label" for="available">
                                                      Available
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="notavailable" value="Not Available" checked="">
                                                    <label class="form-check-label" for="notavailable">
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
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="available" value="Available" checked="">
                                                    <label class="form-check-label" for="available">
                                                      Available
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="notavailable" value="Not Available" checked="">
                                                    <label class="form-check-label" for="notavailable">
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
                                    <th scope="col">Customer Email</th>
                                    <th scope="col">Hall Type</th>
                                    <th scope="col">Hall Number</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
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
                                        <td></td>
                                        <td>
                                            <!--view report-->
                                            <a href="#">
                                                <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                            </a>

                                            <!--Update report-->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered-update"><i class="bi bi-pencil-square"></i></button>
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
                                            <label for="hallvenues" class="form-label">Hall Venues</label>
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
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="available" value="Available" checked="">
                                                    <label class="form-check-label" for="available">
                                                      Available
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="notavailable" value="Not Available" checked="">
                                                    <label class="form-check-label" for="notavailable">
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
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="available" value="Available" checked="">
                                                    <label class="form-check-label" for="available">
                                                      Available
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="notavailable" value="Not Available" checked="">
                                                    <label class="form-check-label" for="notavailable">
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
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="available" value="Available" checked="">
                                                    <label class="form-check-label" for="available">
                                                      Available
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="notavailable" value="Not Available" checked="">
                                                    <label class="form-check-label" for="notavailable">
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
                                    <th scope="col">Customer Email</th>
                                    <th scope="col">Hall Type</th>
                                    <th scope="col">Hall Number</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
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
                                        <td></td>
                                        <td>
                                            <!--view report-->
                                            <a href="#">
                                                <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                            </a>

                                            <!--Update report-->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered-update"><i class="bi bi-pencil-square"></i></button>
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
                </div>
            </div>
        </section>
        <!-- End Content -->
    </main>

    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>