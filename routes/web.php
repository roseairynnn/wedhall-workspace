<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HallController;
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
Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/company-details', function () {
    return view('company-details');
})->name('company-details');

Route::get('/reservation-report', function () {
    return view('reservation-report');
})->name('reservation-report');

Route::get('/typehall', function () {
    return view('typehall');
})->name('typehall');

/* home route for admin page
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');
*/

// Routes for adding halls
Route::get('/company/{id}/add-hall', [HallController::class, 'showAddForm'])->name('hall.add.form');
Route::post('/company/{id}/add-hall', [HallController::class, 'add'])->name('hall.add');

Route::get('/company', [CompanyController::class, 'showCompanies'])->name('company');
Route::post('/register-company', [CompanyController::class, 'register'])->name('register.company');

//FETCHING DATA FROM COMPANY REGISTRATION FORM (ROUTE)
Route::get('/company/{companyid}', [CompanyController::class, 'showCompanyDetails'])->name('company-details');
Route::post('/update-company/{companyid}', [CompanyController::class, 'updateCompany'])->name('update.company');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// End Admin Parts

// Start Customer Parts
// home route for customer page (home-customer.blade.php)
Route::get('/home', function () {
    return view('home-customer');
})->middleware(['auth', 'verified'])->name('home');

//Routes for Reservation History Customer
Route::get('/reservation-history-customer', function () {
    return view('reservation-history-customer');
})->name('reservation-history-customer');

//Routes for Profile
Route::get('/profile-customer', function () {
    return view('profile-customer');
})->name('profile-customer');

//Routes for About Us
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

// End Customer Parts


require __DIR__.'/auth.php';