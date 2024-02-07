<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
});

// Start Admin Parts

// home route for admin page
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/company-details', function () {
    return view('company-details');
})->name('company-details');

Route::get('/typehall', function () {
    return view('typehall');
})->name('typehall');


// Routes for adding halls
Route::get('/company/{id}/add-hall', [HallController::class, 'showAddForm'])->name('hall.add.form');
Route::post('/company/{id}/add-hall', [HallController::class, 'add'])->name('hall.add');

Route::get('/company', [CompanyController::class, 'showCompanies'])->name('company');
Route::post('/register-company', [CompanyController::class, 'register'])->name('register.company');

//FETCHING DATA FROM COMPANY REGISTRATION FORM (ROUTE)
Route::get('/company/{companyid}', [CompanyController::class, 'showCompanyDetails'])->name('company-details');
Route::post('/update-company/{companyid}', [CompanyController::class, 'updateCompany'])->name('update.company');
Route::get('/company/delete/{companyid}', [CompanyController::class, 'delete'])->name('company.delete');

//Hall Route
Route::get('/typehall-customer', [HallController::class, 'showHalls'])->name('typehall-customer');
Route::get('/typehall/{hallid}', [HallController::class, 'showHallsDetails'])->name('hall.details');
Route::get('/hall/delete/{hallid}', [HallController::class, 'delete'])->name('hall.delete');

//Add Reservation Route
Route::get('/reservation-history-customer', [ReservationController::class, 'showReservationsCustomer'])->name('reservation-history-customer');
Route::get('reservation-report', [ReservationController::class, 'showReservations'])->name('reservation-report');
Route::post('/typehall-customer/{hallid}/add-reservation', [ReservationController::class, 'add'])->name('reservation.add');


/*
Route::middleware('auth')->group(function () {
    Route::get('/profile-customer', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile-customer', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile-customer', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});
// End Admin Parts

// Start Customer Parts
// home route for customer page (home-customer.blade.php)
Route::get('/home-customer', function () {
    return view('home-customer');
})->middleware(['auth', 'verified'])->name('home-customer');

//Routes for Type of Hall Customer

//Routes for Reservation History Customer


//Routes for Profile
Route::get('/profile-customer', function () {
    return view('profile-customer');
})->name('profile-customer');

//Routes for About Us
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

//Routes for About Us
Route::get('/aboutus-customer', function () {
    return view('aboutus-customer');
})->name('aboutus-customer');

// End Customer Parts


require __DIR__.'/auth.php';