<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ConfirmedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\sendMail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\PackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\FinishModel;

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


Route::get('/','ProjectController@index')->name('home.index');

Route::get('about','ProjectController@about');

Route::get('contact','ProjectController@contact');

Route::get('gallery','ProjectController@gallery');

Route::get('wed','ProjectController@wed');

Route::get('wedform','ProjectController@wedform');

Route::get('agreement','ProjectController@agreement');

Route::get('reservations','ReservationController@reservations');




//master layout
Route::get('/master_layout', 'MasterLayoutController@master_layout')->name('layout.master_layout');

Route::get('/pending', 'ReservationController@index')->name('layout.reservation.pending');
Route::get('/confirmed', [ConfirmedController::class,'index'])->name('confirmed.index');

Route::get('/finished', 'FinishController@index')->name('layout.reservation.finished');
Route::post('/finished', 'FinishController@store')->name('layout.finish.store');

Route::get('/pendingpayment', 'MasterLayoutController@pendingpayment')->name('layout.payment.pendingpayment');
Route::post('pendingpayment','PendingPaymentController@store')->name('pendingpayment.store');

Route::get('/confirmedpayment', 'ConPaymentController@index')->name('layout.payment.confirmedpayment');
Route::post('/confirmedpayment', 'ConPaymentController@store')->name('layout.payment.store');
Route::get('/confirmmation', 'MasterLayoutController@confirmation')->name('layout.payment.confirmation');

Route::get('/ongoing', 'OngoingController@index')->name('layout.reservation.ongoing');
Route::post('/ongoing', 'OngoingController@store')->name('layout.reservation.store');

Route::get('/refused', 'RefusedController@index')->name('layout.reservation.refused');
Route::PUT('/refused/{id}', 'ReservationController@refused')->name('layout.refused.refused');
Route::PUT('/refused/{id}/restore', 'ReservationController@restore')->name('layout.restore.restore');

//dashboard
Route::get('/dashboard', function () {
    if (Auth::check()) {

        $confirmed_reservations = Reservation::where('isConfirm', '=', 1)->get();
        $concount = $confirmed_reservations->count();

        $confirmed_reservations1 = FinishModel::where('id', '>', 0)->get();
        $concount1 = $confirmed_reservations1->count();

        return view('layout.dashboard.index')->with('concount',$concount )->with('concount1',$concount1);
     }

     else{
        return view('auth.login');
     }

})->name('layout.dashboard.index');

//reservations
Route::PUT('/pending/{id}', 'ReservationController@update')->name('layout.reservation.update');
Route::post('/pending/store', 'ReservationController@store')->name('layout.reservation.store');

//paymentform

Route::get('paymentform', function(Request $request){
    if (! $request->hasValidSignature()) {
        abort(401);}

    else{
        return view('layout.paymentform.pform');
    }
})->name('paymentform');
Route::get('pwelcome','PaymentFormController@paymentform')->name('pwelcome');
Route::get('pform','PaymentFormController@pform')->name('layout.paymentform.pform');
Route::get('thankyou','PaymentFormController@thank')->name('layout.paymentform.thank');
Route::post('payment/store','PaymentFormController@store')->name('layout.paymentform.store');

//message
Route::post('/message', 'MessageController@store')->name('layout.message.store');
Route::get('/message', 'MessageController@index')->name('layout.message.message');
//Package
Route::get('/customize/package', [PackageController::class,'index'])->name('customize.package.index');
Route::post('/customize/package/store', [PackageController::class,'store'])->name('customize.package.store');


//login
//Auth::routes();
//Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@login'])->name('login');
//Route::get('/registration', [CustomAuthController::class, 'registration']);
//Route::post('/register-user', [CustomAuthController::class, 'registeruser'])->name('register-user');
//Route::post('login-user', [CustomAuthController::class, 'loginuser'])->name('login-user');
//Route::post('logout', [ 'as' => 'logout', 'uses' => 'LoginController@logout'])->name('logout');

//Gallery
Route::get('/admin-gallery', 'GalleryController@index')->name('admin-gallery');
Route::post('/upload-file', 'GalleryController@store')->name('fileUpload');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//email
Route::get('/send/email/{id}', 'sendMail@mail');

//calendar
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::post('/events/add', [EventController::class, 'store'])->name('events.store');
Route::put('/events/edit/{id}', [EventController::class, 'update'])->name('events.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
