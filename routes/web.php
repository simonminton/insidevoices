<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RespondentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/companies', [CompanyController::class, 'index'])->name('companies.public');
Route::get('/companies/{company_id}', [CompanyController::class, 'show'])->name('companies.show.public');

Route::get('/your-experience', [RespondentController::class, 'create'])->name('experience.public');
Route::post('/your-experience', [RespondentController::class, 'store'])->name('experience.submit');
