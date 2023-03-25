<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\BoilerServiceController;
use App\Http\Controllers\LetterheadController;
use App\Http\Controllers\StatementController;


Route::get('/',[AppController::class, 'index']);

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //customers route
    Route::get('/customers',[CustomerController::class, 'index'])->name('customers');

    //Quotation route
    Route::get('/quotations',[QuotationController::class, 'index'])->name('quotations');

    //invoices route
    Route::get('/invoices',[InvoiceController::class, 'index'])->name('invoices');

    //certificates route
    Route::get('/certificates',[CertificateController::class, 'index'])->name('certificates');

    //maintenance route
    Route::get('/maintenance',[MaintenanceController::class, 'index'])->name('maintenance');

    //boiler-services route
    Route::get('/boiler-services',[BoilerServiceController::class, 'index'])->name('boiler.service');

    //letterheads route
    Route::get('/letterheads',[LetterheadController::class, 'index'])->name('letterheads');

    //statements route
    Route::get('/statements',[StatementController::class, 'index'])->name('statements');

});

require __DIR__.'/auth.php';
