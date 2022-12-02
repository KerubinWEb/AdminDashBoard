<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard/customers', function () {
    return view('pages.customers');
})->middleware(['auth', 'verified'])->name('pages.customers');

Route::get('/dashboard/customers', [CustomersController::class, 'show'])->name('pages.customers');

Route::get('/dashboard/product', function () {
    return view('pages.product');
})->middleware(['auth'])->name('pages.product');

Route::get('/dashboard/product', [ProductsController::class, 'display'])->name('pages.product');

Route::get('/dashboard/order', function () {
    return view('pages.order');
})->middleware(['auth'])->name('pages.order');

Route::get('/dashboard/order', [OrdersController::class, 'show'])->name('pages.order');

Route::get('/dashboard/payment', function () {
    return view('pages.payment');
})->middleware(['auth'])->name('pages.payment');

Route::get('/dashboard/payment', [PaymentController::class, 'show'])->name('pages.payment');


Route::get('/dashboard/delivery', function () {
    return view('pages.delivery');
})->middleware(['auth'])->name('pages.delivery');

Route::get('/dashboard/delivery', [ShippingController::class, 'show'])->name('pages.delivery');

Route::get('/dashboard/contact', function () {
    return view('pages.contact');
})->middleware(['auth'])->name('pages.contact');

Route::get('/dashboard/setting', function () {
    return view('pages.setting');
})->middleware(['auth'])->name('pages.setting');

Route::get('/dashboard/user', function () {
    return view('pages.user');
})->middleware(['auth'])->name('pages.user');


Route::get('/dashboard/customers/add', [CustomersController::class, 'add']);
Route::post('/dashboard/customers/add', [CustomersController::class, 'insert']);
Route::get('/dashboard/customers/{customer_id}/edit', [CustomersController::class, 'edit']);
Route::put('/dashboard/customers/{customer_id}/edit', [CustomersController::class, 'update']);
Route::delete('/dashboard/customers/{customer_id}',[CustomersController::class, 'destroy']);

Route::post('/dashboard/product/search', [ProductsController::class, 'search']);

Route::post('/dashboard/customers/search', [CustomersController::class, 'search']);


//Route::get('/dashboard', [ChartController::class, 'showDashboard'])->name('dashboard');
Route::get('/dashboard', [AdminController::class, 'TotalCustomers'])->name('dashboard');










// Route::get('/test', function () {
//     return view('pages.test');
// });


require __DIR__ . '/auth.php';
