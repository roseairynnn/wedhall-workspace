<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Wedding Hall</title>

    <!--link url head-->
    @include('components.head')

    <style>
        .userprofile{
            width: 170px;
            height: 170px;
            border-radius: 50%;
            object-fit: cover;
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

    <!--main-->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1 id="dashboard" >Profile</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home-customer')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="#dashboard">Profile </a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                    <div class="card-body pt-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('storage/'.auth()->user()->photo) }}" class="userprofile mb-5">
                        <h3 style="text-align: center">{{ auth()->user()->fullname }}</h3>
                        <h4>@ {{ auth()->user()->username }}</h4>
                    </div>
                    </div>
                </div>

                <div class="col-xl-8">

                    <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">Overview</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" tabindex="-1" role="tab">Edit Profile</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" tabindex="-1" role="tab">Change Password</button>
                        </li>

                        </ul>
                        <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->fullname }}</div>
                            </div>

                            <div class="row">
                            <div class="col-lg-3 col-md-4 label">Username</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->username }}</div>
                            </div>

                            <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->email }}</div>
                            </div>

                            <div class="row">
                            <div class="col-lg-3 col-md-4 label">Phone</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->phone }}</div>
                            </div>

                            <div class="row">
                            <div class="col-lg-3 col-md-4 label">Address</div>
                            <div class="col-lg-9 col-md-8">{{ auth()->user()->address }}</div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">

                            <!-- Profile Edit Form -->
                            <form method="POST" enctype="multipart/form-data" action="{{ route('profile.update') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="photo" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <div class="pt-2">
                                            <input name="photo" type="file" class="form-control" id="photo" accept="image/*" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullname" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="fullname" type="text" class="form-control" id="fullname" value="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="username" type="text" class="form-control" id="username" value="" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="email" type="email" class="form-control" id="email" value="" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="phone" type="text" class="form-control" id="Phone" value="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="address" type="text" class="form-control" id="address" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="zip" class="col-md-4 col-lg-3 col-form-label">ZIP</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="zip" type="text" class="form-control" id="zip" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="city" class="col-md-4 col-lg-3 col-form-label">City</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="city" type="text" class="form-control" id="city" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="state" class="col-md-4 col-lg-3 col-form-label">State</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" name="state" id="state">
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
                                </div>

                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                            <!-- End Profile Edit Form -->
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                            <!-- Change Password Form -->
                            <form>

                            <div class="row mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                <div class="col-md-8 col-lg-9">
                                <input name="password" type="password" class="form-control" id="currentPassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                <div class="col-md-8 col-lg-9">
                                <input name="newpassword" type="password" class="form-control" id="newPassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                <div class="col-md-8 col-lg-9">
                                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                            </form><!-- End Change Password Form -->

                        </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- End Main Content -->

    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>