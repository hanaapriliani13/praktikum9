<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

/**
 * HTTP Method:
 * 1. Get    :untuk menampilkan
 * 2. Post   :untuk mengirim data
 * 3. Put    :untuk mengupdate data
 * 4. Delete :untuk menghapus data
 */

// Route untuk menampilkan teks salam
Route::get('admin/dashboard', [DashboardController::class, 'index']);