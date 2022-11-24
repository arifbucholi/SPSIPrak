<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('contact');
});

// Route::get('/perizinan', function () {
//     return view('perizinan');
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/product-single', function () {
    return view('product-single');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

// Route::resource('perizinan', mountainController::class);
// Route::get('/perizinan', [mountainController::class, "index"]);

// Route::resource('perizinan', gunungController::class);
Route::get('/perizinan', [gunungController::class, 'index']);
route::post('/createizin',[perizinanController::class, 'insertPerizinan']);
