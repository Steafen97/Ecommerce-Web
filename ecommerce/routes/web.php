<?php

use App\Http\Controllers\PdfController;
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

// Route Halaman User
Route::get('/user-page', function () {
     return view('pages.user.home');
});

Route::middleware(['auth'])->group(function () {
    // Route Halaman Admin
Route::get('/admin2', function () {
    return view('pages.admin.index');
});
// Route CRUD Produk
Route::resource('product','ProductsController');

// Route CRUD Toko
Route::resource('shop', 'ShopsController');

// Route CRUD Kategori
Route::resource('categorie', 'CategorieController');

// Route CRUD Order
Route::resource('order', 'OrdersController');

//Route Transaction
Route::get('/transaction', function () {
    return view('pages.admin.transaction.index');
});

});

// Route Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

//Route untuk DomPDF Package

Route::get('/view-statement', function () {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Laravel E-Commerce Project</h1>');
    return $pdf->stream();
});

Route::get('/statement','PdfController@test');

//Route Authentication

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route TinyMCE

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

