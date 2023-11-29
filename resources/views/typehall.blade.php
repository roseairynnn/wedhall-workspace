<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type | Wedhall</title>

    <!--link url head-->
    @include('components.head')

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
            <h1 id="dashboard" >Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="typehall">Type Hall</a></li>
                <li class="breadcrumb-item active"><a href="#dashboard">Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <!-- Start Content -->

        <!-- End Content -->
    </main>

    <!--footer & link url js-->
    @include('components.footer')
</body>
</html>