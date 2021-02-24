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
Route::get('/how-it-works', function () {
    return view('how-it-works');
});
Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/faqs', function () {
    return view('faq');
});
Route::get('/our-mission', function () {
    return view('our-mission');
});
Route::get('/story-guidelines', function () {
    return view('story-guidelines');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/terms-of-use', function () {
    return view('terms-of-use');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/companies', [CompanyController::class, 'index'])->name('companies.public');
Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show.public');

Route::get('/your-story', [RespondentController::class, 'create'])->name('experience.public');
Route::post('/your-story', [RespondentController::class, 'store'])->name('experience.submit');
