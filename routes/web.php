<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;

use App\Http\Livewire\InventoryForm;
use App\Http\Livewire\LaravelExamples\inventorymanagement;

use App\Http\Controllers\InventoryController;


Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');

    Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');
});

Route::middleware('auth')->group(function () {


    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/add-inventory', InventoryForm::class)->name('add-inventory'); // Use InventoryForm here
    Route::get('/inventory-management', inventorymanagement::class)->name('inventory-management');

    Route::get('/inventory/{id}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
    Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');
    Route::delete('/inventory/{id}', [InventoryController::class, 'destroy'])->name('inventory.delete');

});
