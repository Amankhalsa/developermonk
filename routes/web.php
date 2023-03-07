<?php

use App\Http\Livewire\Backend\AdminDashboard;
use App\Http\Livewire\Frontend\ContactPage;
use App\Http\Livewire\Frontend\DetailsPage;
use App\Http\Livewire\Frontend\EventsPage;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\VenuesPage;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        return redirect()->route('admin_dashboard');
    })->name('dashboard');
});
Route::group(['middleware' => ['adminlogin']], function () {
Route::get('/admin-dashboard', AdminDashboard::class)->name('admin_dashboard');
});
// HomePage

Route::get('/', HomePage::class)->name('home_page');
Route::get('/events', EventsPage::class)->name('event_page');

Route::get('/Venues', VenuesPage::class)->name('Venues_page');

Route::get('/details-page', DetailsPage::class)->name('details_page');
Route::get('/contact-page', ContactPage::class)->name('contact_page');


// 