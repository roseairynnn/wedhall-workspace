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
            <h1 id="dashboard">Reservation History</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#dashboard">Home</a></li>
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
                                    <th scope="col">#</th>
                                    <th scope="col">Reservation ID</th>
                                    <th scope="col">Customer Email</th>
                                    <th scope="col">Hall Type</th>
                                    <th scope="col">Date | Time</th>
                                    <th scope="col">Status</th>
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
                                        <td class="green"><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <!--view report-->
                                            <a href="#">
                                                <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                            </a>
                                            <!--Update report-->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered-update"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="green"><span class="badge bg-success">Approved</span></td>
                                        <td>
                                            <!--view report-->
                                            <a href="#">
                                                <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                            </a>
                                            <!--Update report-->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered-update"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="green"><span class="badge bg-danger">Rejected</span></td>
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