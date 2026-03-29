<?php

use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LeadController as AdminLeadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/lead', [LeadController::class, 'store'])->name('lead.store');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('services', ServiceController::class);
    Route::resource('courses', CourseController::class);
    Route::get('/leads', [AdminLeadController::class, 'index'])->name('leads.index');
    Route::get('/leads/{lead}', [AdminLeadController::class, 'show'])->name('leads.show');
    Route::patch('/leads/{lead}/status', [AdminLeadController::class, 'updateStatus'])->name('leads.status');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
