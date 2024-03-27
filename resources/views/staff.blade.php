<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff | Wedhall</title>
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
            <h1 id="dashboard">Staff</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('company')}}">List of Staff</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <!-- Start Content -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Register Staff -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="border-bottom: 1px solid #dee2e6;">List of Staff</h5>
                            <!-- Vertically centered Modal Register Staff-->
                            <div class="modal fade" id="verticalycentered-register" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Register Staff</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <!-- Register Staff Form -->
                                    <form class="row g-3" method="POST" action=""> 
                                        @csrf
                                        <div class="col-12">
                                            <label for="fullname" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="staff@email.com.my" aria-label="email" aria-describedby="basic-addon1">
                                            </div>
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
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
                                        <td> <!-- View company details -->
                                            <a href="">
                                                <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                            </a>

                                            <!--Delete Staff-->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!-- Delete Confirmation Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this company?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a href="">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            
                            <div style="display: flex; justify-content: flex-end; padding: 0px 8px;">
                                <a type="button" href="#" class="btn btn-dark">Export <i class="bi bi-download"></i></a>
                                &nbsp; &nbsp;
                                <button type="button" id="add-company" class="btn btn-primary" style="border-radius: 60%;" data-bs-toggle="modal" data-bs-target="#verticalycentered-register">
                                    <i class="bx bx-plus-medical"></i>
                                </button>  
                            </div>
                        </div>
                    </div>
                    <!-- End Register Staff -->
                    
                </div>
            </div>
        </section>
        <!-- End Content -->
    </main>
    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>