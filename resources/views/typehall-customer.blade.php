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
        @include('components.nav-customer')
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
                  <label for="inputTime" class="col-sm-2 col-form-label">Start Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="endTime" class="col-sm-2 col-form-label">End Time</label>
                  <div class="col-sm-10">
                    <input type="time" id="endTime" name="endTime" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="hallcapacity" class="col-sm-2 col-form-label">Capacity</label>
                  <div class="col-sm-10">
                    <input type="number" id="hallcapacity" name="hallcapacity" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" id="search" name="search" class="btn btn-primary">Search</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
        </div>
    </main>
    <!-- End #main -->

    <!--footer & link url js-->
    @include('components.footer')
    
</body>
</html>