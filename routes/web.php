<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\WeddingController;

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

// Route::get('/', function () {
// })->name('landing-page');

Route::get('/', [WeddingController::class, 'index'])->name('index');
Route::middleware(['auth'])->group(
    function () {
        Route::get('/dashboard', function () {
            $param['pageIcon'] = 'fa fa-home';
            $param['pageTitle'] = 'Aplikasi Wedding Invitation';
            return view('dashboard', $param);
        })->middleware(['auth'])->name('dashboard');
        Route::resource('visitor', VisitorController::class);
    }
);

Route::post('store-pelanggan', [VisitorController::class, 'storeVisitor'])->name('simpan');
require __DIR__ . '/auth.php';
