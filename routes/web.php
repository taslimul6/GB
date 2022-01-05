<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminStuController;
use App\Http\Controllers\AdminDepController;
use App\Http\Controllers\AdminSesController;
use App\Http\Controllers\AdminPageController;

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

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/Enrollments' , [AdminPageController::class , 'enrollment'])->name('student.enrollment');



Route::resource("admin/session" , AdminSesController::class);

Route::resource('admin/student', AdminStuController::class);

Route::resource('admin/department', AdminDepController::class);