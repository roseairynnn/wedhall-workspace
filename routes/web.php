<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
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
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');
Route::get('/company', [CompanyController::class, 'showCompanies'])->name('company');
Route::post('/register-company', [CompanyController::class, 'register'])->name('register.company');

//FETCHING DATA FROM COMPANY REGISTRATION FORM (ROUTE)
Route::get('/show-companies', [CompanyController::class, 'showCompanies'])->name('show.companies');
Route::get('/company/{id}', [CompanyController::class, 'showCompanyDetails'])->name('company-details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';