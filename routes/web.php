<?php

use App\Http\Controllers\DonationController;
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

Route::get('/', [DonationController::class, 'index'])->name('index');

Route::get('/donation', function (){
    return view('donation');
});

Route::post('/store', [DonationController::class, 'store'])->name('donation.store');
Route::get('/checkout', function (){
    return view('chechkout');
});
Route::get('/after-payment', [DonationController::class, 'afterPayment']);
