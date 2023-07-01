<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ClickController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostbackController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AffiliateController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('/leads', [LeadsController::class, 'index'])->name('leads.index');
    Route::get('/affiliates', [AffiliateController::class, 'index'])->name('affiliates.index');
    Route::get('/postbacklogs', [PostbackController::class, 'index'])->name('postback.index');
    Route::get('/commissionlogs', [CommissionController::class, 'index'])->name('commission.index');
    Route::get('/buyers', [BuyerController::class, 'index'])->name('buyers.index');

});

Route::get('/', [PageController::class, 'home_us'])->name('home-us');
Route::get('apply-us', [PageController::class, 'loan_eligibility_check'])->name('apply-us');
Route::get('apply-us', [PageController::class, 'apply_us'])->name('apply-us');
Route::get('how_it_works', [PageController::class, 'howitworks'])->name('how_it_works');
Route::get('do_i_qualify', [PageController::class, 'doiqualify'])->name('do_i_qualify');
Route::get('keep_safe_from_scammers', [PageController::class, 'keep_safe_from_scammers'])->name('keep_safe_from_scammers');
Route::get('terms', [PageController::class, 'terms'])->name('terms');
Route::get('guides', [PageController::class, 'guides'])->name('guides');
Route::get('responsible-lending', [PageController::class, 'responsible_lending'])->name('responsible-lending');
Route::get('privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('cookies', [PageController::class, 'cookies'])->name('cookies');
Route::get('complaints', [PageController::class, 'complaints'])->name('complaints');
Route::get('contact-us', [PageController::class, 'contact'])->name('contact-us');
Route::get('marketing_opt_out', [PageController::class, 'marketing_opt_out'])->name('marketing_opt_out');
Route::get('quick-loans', [PageController::class, 'quick_loans'])->name('quick-loans');
Route::get('short-term-loans', [PageController::class, 'short_term_loans'])->name('short-term-loans');

Route::get('/click', [ClickController::class, 'track'])->name('click.track');

//Route::get('/register', function () {
//    return response('Forbidden', Response::HTTP_FORBIDDEN);
//})->name('register');
//
//Route::group(['middleware' => 'role:admin'], function () {
//    // Routes accessible only to users with the 'admin' role
//    Route::get('/dashboard', 'AdminController@dashboard');
//    Route::get('/users', 'AdminController@users');
//    // Add more admin routes as needed
//});
//
//Route::group(['middleware' => 'role:affiliate'], function () {
//    // Routes accessible only to users with the 'affiliate' role
//    Route::get('/dashboard', 'AffiliateController@dashboard');
//    Route::get('/campaigns', 'AffiliateController@campaigns');
//    // Add more affiliate routes as needed
//});

