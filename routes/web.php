<?php
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

//  "Customer" Controller [ Resource controller ]
use \App\Http\Controllers\CustomerController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

Route::get('/customers', 'CustomerController@index')->name('customers');
Route::get('/customers/create', 'CustomerController@create')->name('customers.create');
Route::post('/customers', 'CustomerController@store')->name('customers.store');
Route::get('/customers/{customer}', 'CustomerController@show')->name('customers.show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit')->name('customers.edit');
Route::put('/customers/{customer}', 'CustomerController@update')->name('customers.update');
Route::DELETE('/customers/{customer}', 'CustomerController@destroy')->name('customers.destroy');


///////////////////////////////////////////////////
//                FOR MAIL                  /////// 
Route::get('email/welcome', function () {
    //Mail::to($request->user())->send(new WelcomeMail());
    Mail::to("testing@testing.com")->send(new WelcomeMail());


    return new WelcomeMail();
});




///////////////////////////////////////////////////
//              FOR CLEAR CACHE             ///////
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function () {
   Artisan::call('config:clear');
   Artisan::call('route:clear');
   Artisan::call('view:clear');
   Artisan::call('cache:clear');

   return "Cache cleared successfully. <br /><a href='/'>BACK</a>";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
