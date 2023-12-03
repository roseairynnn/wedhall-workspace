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

                    <!-- Start Company Details -->
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title" style="border-bottom: 1px solid #dee2e6;">Company A</h5><!--Company Name fetch from database-->
            
                          <!-- General Form Elements -->
                          <form class="companydetails">
                            <div class="row mb-3">
                              <label for="companyname" class="col-sm-2 col-form-label">Company Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="companyname" name="companyname" value=": &nbsp; Company A" style="border-style: none; background-color: #fff; border: none;" disabled="">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="companyregistrationNo" class="col-sm-2 col-form-label">Registration No.</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="companyregistrationNo" name="companyregistrationNo" value=": &nbsp; DG0001" style="border-style: none; background-color: #fff; border: none;" disabled="">
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label for="companynophone" class="col-sm-2 col-form-label">Telephone Number</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="companynophone" name="companynophone" value=": &nbsp; 012-9312234" style="border-style: none; background-color: #fff; border: none;" disabled="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="companyemail" class="col-sm-2 col-form-label">Email/Fax</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="companyemail" name="companyemail" value=": &nbsp; companya@gmail.com" style="border-style: none; background-color: #fff; border: none;" disabled="">
                                </div>
                            </div>
                            <div class="row mb-3">
                              <label for="companyaddress" class="col-sm-2 col-form-label">Address</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="companyaddress" name="companyaddress" value=": &nbsp; NO.14, JALAN TU 34,TAMAN TASEK UTAMA,4000,SHAH ALAM,MELAKA" style="border-style: none; background-color: #fff; border: none; height: 100%;" disabled="">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="companydatereg" class="col-sm-2 col-form-label">Date Registration</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="companydatereg" name="companydatereg" value=": &nbsp; 15/2/2022" style="border-style: none; background-color: #fff; border: none;" disabled="">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="staffroster" class="col-sm-2 col-form-label">Staff Roster</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="staffroster" name="staffroster" value=": &nbsp; ASHIKIN BINTI MARDZUKI" style="border-style: none; background-color: #fff; border: none;" disabled="">
                              </div>
                            </div>
                          </form>
                          <!-- End General Form Elements -->
                        </div>
                    </div>                        
                    <!-- End Company Details -->

                    <!-- Start Hall Registration -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="border-bottom: 1px solid #dee2e6;">Senarai No Rujukan Pengecualian</h5>
            
                            <!-- Vertically centered Modal Register Exemption-->
                          <div class="modal fade" id="verticalycentered" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Daftar Pengecualian</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- Daftar Exemption Form -->
                                <form class="row g-3" action="includes/daftar-pengecualian.inc.php" method="post">
                                    <div class="col-12">
                                        <label for="namasyarikat" class="form-label">Nama Syarikat</label>
                                        <input type="text" class="form-control" id="namasyarikat" name="namasyarikat" value="DAGANG SDN BHD" required="">
                                    </div>
                                    <div class="col-12">
                                        <label for="robroc" class="form-label">ROB / ROC</label>
                                        <input type="text" class="form-control" id="robroc" name="robroc" value="DG0001" required="">
                                    </div>
                                    <div>
                                      <label for="noexemption" class="form-label">No Pengecualian MIDA</label>
                                      <div style="display: flex; flex-direction: row; align-items: center;">
                                        <div class="col-md-2">
                                          <input type="text" class="form-control" id="noexemption" name="no-mida1" maxlength="4" minlength="4">
                                        </div>
                                          <label>&nbsp;/&nbsp;</label>
                                        <div class="col-md-2">
                                          <input type="text" class="form-control" id="noexemption" name="no-mida2" maxlength="4" minlength="4">
                                        </div>
                                          <label>&nbsp;/&nbsp;</label>
                                        <div class="col-md-3">
                                          <input type="text" class="form-control" id="noexemption" name="no-mida3" maxlength="6" minlength="6">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="norefexemption" class="form-label">No Ruj. MIDA <span style="color: red;">* optional</span></label>
                                        <input type="text" class="form-control" id="norefexemption" name="norefexemption">
                                    </div>
                                    <div class="col-12">
                                        <label for="tempohkelulusan" class="form-label">Tempoh Kelulusan</label>
                                        <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                                          <div class="col-md-6">
                                            <label class="form-label">Mula</label>
                                            <input type="date" class="form-control" id="tarikh-mula" name="tarikh-mula" required="">
                                          </div>
                                          <div class="col-md-6">
                                            <label class="form-label">Tamat</label>
                                            <input type="date" class="form-control" id="tarikh-akhir" name="tarikh-akhir" required="">
                                          </div>
                                        </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <label for="status" class="form-label">Status</label>
                                                      <div class="col-ms-10">
                                          <select name="status" id="" class="form-control" aria-label="Default select example">
                                            <option selected="">Choose Status</option>
                                            <option value="EXPIRED">Expired</option>
                                            <option value="ACTIVE">Active</option>
                                          </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                                      <label for="doksokongan" class="form-label">Dokumen Sokongan <span style="color: red;">*.pdf ONLY * optional</span></label>
                                      <input class="form-control" type="file" id="doksokongan" name="doksokongan" accept="application/pdf">
                                    </div> -->
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                                    </div>
                                </form>
                                <!--End Daftar Exemption Form -->
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Vertically centered Modal Register Exemption-->
            
                            <!-- Table with stripped rows -->
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table datatable dataTable-table">
                              <thead>
                                <tr><th scope="col" data-sortable="" style="width: 8.97129%;"><a href="#" class="dataTable-sorter">#</a></th><th scope="col" data-sortable="" style="width: 75.9569%;"><a href="#" class="dataTable-sorter">No Ruj MIDA Pengecualian</a></th><th scope="col" data-sortable="" style="width: 31.6986%;"><a href="#" class="dataTable-sorter">Tarikh Diluluskan</a></th><th scope="col" data-sortable="" style="width: 31.6986%;"><a href="#" class="dataTable-sorter">Tempoh Diluluskan</a></th><th scope="col" data-sortable="" style="width: 27.512%;"><a href="#" class="dataTable-sorter">Status</a></th><th scope="col" data-sortable="" style="width: 32.8947%;"><a href="#" class="dataTable-sorter">Lampiran</a></th></tr>
                              </thead>
                              <tbody><tr><th scope="row">1</th><td><a href="pengecualian.php?id=CDE1/2022/000001">CDE1/2022/000001</a></td><td>
                                    15/2/2022 - 15/2/2023                        </td><td>
                                    1 tahun, 0 bulan, 0 hari                        </td><td>
                                                                  <span class="badge bg-success">
                                          <i class="bi bi-check-circle me-1"></i>&nbsp;Active
                                        </span>
                                                                
                                    </td><td>No attachment.</td></tr><tr><th scope="row">2</th><td><a href="pengecualian.php?id=320/35300/030466/000062JPC2">320/35300/030466/000062JPC2</a></td><td>
                                    17/2/2022 - 17/2/2023                        </td><td>
                                    1 tahun, 0 bulan, 0 hari                        </td><td>
                                                                  <span class="badge bg-success">
                                          <i class="bi bi-check-circle me-1"></i>&nbsp;Active
                                        </span>
                                                                
                                    </td><td>No attachment.</td></tr></tbody></table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 2 of 2 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"></ul></nav></div></div>
                            <!-- End Table with stripped rows -->
            
                            <div style="display: flex; justify-content: flex-end; padding: 0px 8px;">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered" style="margin-right: 10px;">Daftar Pengecualian
                            </button></div>
                        </div>
                    </div>
                    <!-- End Hall Registration -->

                    
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