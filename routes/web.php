<?php

use App\Models\Collection;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/koleksi', [CollectionController::class, 'index'])
->name('koleksi');
Route::get('/koleksiTambah', [CollectionController::class, 'create'])
->name('koleksiTambah');
Route::post('/koleksiStore', [CollectionController::class, 'store'])
->name('koleksiStore');
Route::get('/user', [UserController::class, 'index'])
->name('user');

Route::resource('collectionView', CollectionController::class);
Route::resource('userView', UserController::class);

require __DIR__.'/auth.php';
