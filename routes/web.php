<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\About;
use App\Http\Livewire\Cart as LivewireCart;
use App\Http\Livewire\Contact;
use App\Http\Livewire\DetailProduct;
use App\Http\Livewire\Midtrans;
use App\Http\Livewire\Product;
use App\Http\Livewire\Redirect;

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

Route::get('/',Home::class);
Route::get('/about',About::class);
Route::get('/contactus', Contact::class);
Route::get('/redirect',Redirect::class);
Route::get('/product',Product::class);
Route::get('/detail_product/{idproduct}', DetailProduct::class);
Route::post('/add_cart/{id}', [HomeController::class,'add_cart']);
Route::get('/cart',LivewireCart::class);
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
Route::get('/payment/{totalprice}', [HomeController::class, 'payment']);
Route::get('/pay/{oid}',Midtrans::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
