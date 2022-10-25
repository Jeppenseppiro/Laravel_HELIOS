<?php

use App\DataTables\PrimaryDistributionDataTable;
use App\Http\Controllers\DistributionController;
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
  return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
  // Dashboard Section
  Route::get('/dashboard2', function () {
    return view('web.dashboard.index');
  })->name('dashboard.index');

  //Map Section
  Route::get('/map', function () {
    return view('web.map.index');
  })->name('map.index');

  //Database Section
  Route::get('/database', [DistributionController::class, 'index'])->name('database.index');
  Route::get('/database/distribution/create', [DistributionController::class, 'create'])->name('database.distribution.create');

  //Settings Section
  Route::get('/settings', function () {
    return view('web.settings.index');
  })->name('settings.index');
});

Route::post('/database/distribution/store', [DistributionController::class, 'store'])->name('database.distribution.store');
Route::get('/database/distribution/types', [DistributionController::class, 'types'])->name('database.distribution.types');



Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
