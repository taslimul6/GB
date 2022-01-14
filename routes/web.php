<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminStuController;
use App\Http\Controllers\AdminDepController;
use App\Http\Controllers\AdminSesController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminEnrollController;
use App\Http\Controllers\AdminPaymentController;
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
    return view('login');
});

Route::get('/student', function () {
    return view('student.index');
});

Route::get('/admin', [AdminPageController::class, 'index'])->name('admin');


Route::resource("admin/session" , AdminSesController::class);

Route::resource('admin/student', AdminStuController::class);

Route::resource('admin/department', AdminDepController::class);

Route::resource('admin/enrollment', AdminEnrollController::class);

Route::resource('admin/payment', AdminPaymentController::class);
Route::get('admin/due/department' , [AdminPageController::class , 'due'])->name('payment.due');
Route::get('admin/tution-fees' , [AdminPageController::class , 'tution'])->name('tution');
Route::put('admin/tution-fees' , [AdminPageController::class , 'tutionStore'])->name('tutionStore');
Route::get('admin/payment-report' , [AdminPageController::class , 'pr'])->name('pr');
Route::get('admin/payment-single' , [AdminPageController::class , 'singleTnx'])->name('singleTnx');
