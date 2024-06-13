<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\InventoryLivewire;
use App\Http\Livewire\InventoryCreate;
use App\Http\Livewire\InventoryForm;
use App\Http\Livewire\LaravelExamples\inventorymanagement;
use App\Http\Livewire\VirtualReality;
use Illuminate\Http\Request;
use App\Http\Controllers\InventoryController;


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


    Route::delete('/inventory/{id}', [InventoryController::class, 'destroy'])->name('inventory.delete');
        // Route::get('/dashboard', Dashboard::class)->name('dashboard');
    // Route::get('/billing', Billing::class)->name('billing');
    // Route::get('/profile', Profile::class)->name('profile');
    // Route::get('/tables', Tables::class)->name('tables');
    // Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    // Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    // Route::get('/rtl', Rtl::class)->name('rtl');
    // Route::get('/virtual-reality', VirtualReality::class)->name('virtual-reality');

});
