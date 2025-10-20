<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/rahasia', function(): string{
    return 'ini path rahasia';
})-> middleware(['auth', 'rollcheck:admin']);

// Route::get('/product/{number}', [ProductController::class, 'index'])
//     ->middleware(['auth','rollcheck:admin,owner'])
//     ->name('product.index');

Route::get('/route_count/{id}', [ProductController::class,'show']);

//Route::get('/product/{id}', [ProductController::class, 'index']);

Route::get('/uts', [UtsController::class, 'index'])->name('uts.index');
Route::get('/uts/web', [UtsController::class, 'web'])->name('uts.web');
Route::get('/uts/database', [UtsController::class, 'database'])->name('uts.database');

// Route::get('/product/create', [ProductController::class, 'create'])->name("product-create");
// Route::post('/product', [ProductController::class, 'store'])->name("product-store");

Route::get('/produk/{nilai}', [ProductController::class, 'show'])->name('produk.show');

Route::resource('products', ProductController::class);

// Route::get('product/create', [ProductController::class, 'create'])->name('product-create');
// Route::post('/product', [ProductController::class, 'store'])->name('product-store');

Route::get('/product', [ProductController::class, 'index'])->name('product-index');


Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
Route::put('product/{id}', [ProductController::class, 'update'])->name('product-update');

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product-destroy');

Route::get('/product/create', [ProductController::class, 'create'])->name('product-create');
Route::post('/product', [ProductController::class, 'store'])->name('product-store');

require __DIR__.'/auth.php';
