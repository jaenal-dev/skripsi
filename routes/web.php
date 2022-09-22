<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{UserController, AnggaranController, LocationController, TransportController, PejabatController};
use App\Http\Controllers\Profile\{UpdateProfileController, UpdatePasswordController};
use App\Http\Controllers\Sppd\{SptController, SppdController, NppdController};
use App\Http\Controllers\User\ReportController;

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

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group( function()
{
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile/edit', [UpdateProfileController::class, 'create'])->name('profile');
    Route::put('/profile/update', [UpdateProfileController::class, 'store'])->name('profile.update');

    Route::get('/password/edit', [UpdatePasswordController::class, 'edit'])->name('password.edit');
    Route::put('/password/edit', [UpdatePasswordController::class, 'update']);

    Route::resource('/pejabat', PejabatController::class);

    Route::resource('user', UserController::class);

    // Route::resource('/sppd', SppdController::class);
    Route::get('/sppd', [SppdController::class, 'index'])->name('sppd.index');
    Route::get('/sppd/create/{spt}', [SppdController::class, 'create'])->name('sppd.create');
    Route::post('/sppd/create/{spt}', [SppdController::class, 'store']);
    Route::get('/sppd/{sppd}/edit', [SppdController::class, 'edit'])->name('sppd.edit');
    Route::put('/sppd/{sppd}/edit', [SppdController::class, 'update']);
    Route::delete('/sppd/{sppd}', [SppdController::class, 'destroy']);
    Route::get('/sppd/{sppd}', [SppdController::class, 'show'])->name('sppd.print');

    Route::resource('/spt', SptController::class);

    // Route::resource('/nppd', NppdController::class);
    // Route NPPD
    Route::get('/nppd', [NppdController::class, 'index'])->name('nppd.index');
    Route::get('/nppd/create/{spt}', [NppdController::class, 'create'])->name('nppd.create');
    Route::post('/nppd/create/{spt}', [NppdController::class, 'store']);
    Route::get('/nppd/{nppd}/edit', [NppdController::class, 'edit'])->name('nppd.edit');
    Route::put('/nppd/{nppd}/edit', [NppdController::class, 'update']);
    Route::delete('/nppd/{nppd}', [NppdController::class, 'destroy'])->name('nppd.destroy');
    Route::put('/status/{nppd}', [NppdController::class, 'status'])->name('status');
    Route::get('/nppd/print/{nppd}', [NppdController::class, 'show'])->name('nppd.print');
    // Route NPPD

    Route::resource('/surat-tugas', SptController::class);

    Route::resource('/location', LocationController::class);

    Route::resource('/transport', TransportController::class);

    Route::resource('/anggaran', AnggaranController::class);

    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
    Route::get('/report/create/{sppd}', [ReportController::class, 'create'])->name('report.create');
    Route::post('/report/create/{sppd}', [ReportController::class, 'store']);
    Route::get('/report/{report}/edit', [ReportController::class, 'edit'])->name('report.edit');
    Route::put('/report/{report}/edit', [ReportController::class, 'update']);
    Route::delete('/report/{report}', [ReportController::class, 'destroy'])->name('report.destroy');
    Route::get('/report/print/{sppd}', [ReportController::class, 'show'])->name('report.print');

});

