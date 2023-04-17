<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'showHomePage'])->name('homepage');



Route::get('/comic/show/{id}', [PublicController::class, 'showComic'])->name('comic.show');

Route::get('/search', [PublicController::class, 'searchComic'] )->name('comic.search');


Route::get('/contact-us', [ContactController::class, 'contactPage'])->name('contactus');

Route::post('/contact-send', [ContactController::class, 'contactSend'])->name('contact.send');

Route::get('/thankyoupage', [ContactController::class, 'thankYouPage'])->name('contact.thankyou');