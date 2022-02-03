<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminStuController;
use App\Http\Controllers\AdminDepController;
use App\Http\Controllers\AdminSesController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminEnrollController;
use App\Http\Controllers\AdminPaymentController;
use App\Http\Controllers\AdminScholarshipController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminMemberController;

use App\Http\Controllers\EntryPageController;


use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\StudentPageController;

use App\Http\Controllers\OfficerPageController;
use App\Http\Controllers\ViewerPageController;






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

Route::get('/admin-login', function () {
    return view('admin.login');
})->name('ad.login');

Route::post('/admin-login', [LoginController::class , 'admin'])->name('admin.login');
Route::get('/admin/logout' , [LoginController::class , 'adLogout'])->name('ad.logout');


Route::middleware('superAdmin')->group(function () {

    Route::get('/admin', [AdminPageController::class, 'index'])->name('admin');

    Route::resource("admin/session" , AdminSesController::class);

    Route::resource('admin/student', AdminStuController::class);
    Route::get('admin/depByStu' , [AdminStuController::class , 'depByStu'])->name('admin.depByStu');

    Route::resource('admin/department', AdminDepController::class);


    Route::resource('admin/enrollment', AdminEnrollController::class);
    Route::post('admin/enrollment/create' , [AdminEnrollController::class , 'auto'])->name('enrollment.auto');

    Route::resource('admin/payment', AdminPaymentController::class);

    Route::resource('admin/scholarship', AdminScholarshipController::class);

    Route::resource('admin/member', AdminMemberController::class);

    Route::get('admin/pins' , [AdminPageController::class , 'pins'])->name('pins');



    Route::get('admin/due/department' , [AdminPageController::class , 'due'])->name('payment.due');
    Route::get('admin/tution-fees' , [AdminPageController::class , 'tution'])->name('tution');
    Route::put('admin/tution-fees' , [AdminPageController::class , 'tutionStore'])->name('tutionStore');
    Route::get('admin/payment-report' , [AdminPageController::class , 'pr'])->name('pr');
    Route::get('admin/payment-single' , [AdminPageController::class , 'singleTnx'])->name('singleTnx');
    Route::get('admin/current-session' , [AdminPageController::class , 'crnts'])->name('crnts');
    Route::put('admin/current-session' , [AdminPageController::class , 'crstore'])->name('crnts.store');

    Route::get('admin/online-wait' , [AdminPageController::class , 'wait'])->name('online.wait');
    Route::get('admin/online-wait/{id}' , [AdminPageController::class , 'Oprocess'])->name('online.process');
    Route::post('admin/online-wait/{id}' , [AdminPageController::class , 'Ostore'])->name('admin.onlineStore');
    Route::put('admin/online-wait/delete/{id}' , [AdminPageController::class , 'Odelete'])->name('online.delete');

    Route::get('admin/online-log' , [AdminPageController::class , 'Olog'])->name('admin.Olog');



});






//Student Parts


Route::get('/', function () {
    return view('login');
})->name('stuLogin')->middleware('guest');

Route::post('/', [LoginController::class , 'stLogin'])->name('stLogin');

Route::get('/logout' , [LoginController::class , 'logout'])->name('st.logout');



Route::middleware('student')->group(function () {

    Route::get('/student', [StudentPageController::class, 'index'])->name('st.index');
    Route::get('/student/profile', [StudentPageController::class, 'profile'])->name('st.profile');
    Route::resource('student/profile', StudentProfileController::class);
    Route::get('/student/online-payment', [StudentPageController::class, 'online'])->name('payment.online');
    Route::post('/student/online-payment', [StudentPageController::class, 'onlineStore'])->name('st.pstore');
    Route::get('/student/payment-details', [StudentPageController::class, 'payDetail'])->name('st.payment');
    Route::get('/student/online-log', [StudentPageController::class, 'Onlog'])->name('st.Onlog');

});


//entry Parts


Route::get('/entry-login' , function(){ return view('entry.login');})->name('en.login');
Route::post('/entry-login', [LoginController::class , 'entry'])->name('entry.login');
Route::get('/entry/logout' , [LoginController::class , 'enLogout'])->name('en.logout');

Route::middleware('entry')->group(function () {

    Route::get('/entry' , [EntryPageController::class , 'index'])->name('en.index');
    Route::get('/entry/payment-create' , [EntryPageController::class , 'pCreate'])->name('en.entry');
    Route::post('/entry/payment-create' , [EntryPageController::class , 'pStore'])->name('en.payment.store');
    Route::delete('/entry/payment-create/{id}' , [EntryPageController::class , 'pDelete'])->name('en.payment.destroy');
    Route::put('/entry/payment-create/{id}' , [EntryPageController::class , 'pUpdate'])->name('en.payment.update');
    Route::get('/entry/payment-log' , [EntryPageController::class , 'plog'])->name('en.plog');
    Route::get('/entry/department-report' , [EntryPageController::class , 'prD'])->name('en.prD');
    Route::get('/entry/payment-report' , [EntryPageController::class , 'prA'])->name('en.prA');

});


//officer Parts

Route::get('/officer-login' , function(){ return view('officer.login');})->name('of.login');
Route::post('/officer-login', [LoginController::class , 'officer'])->name('officer.login');
Route::get('/officer/logout' , [LoginController::class , 'ofLogout'])->name('of.logout');


Route::middleware('officer')->group(function () {

    Route::get('/officer' , [OfficerPageController::class , 'index'])->name('of.index');
    Route::get('/officer/payment-create' , [OfficerPageController::class , 'pCreate'])->name('of.entry');
    Route::post('/officer/payment-create' , [OfficerPageController::class , 'pStore'])->name('of.payment.store');
    Route::delete('/officer/payment-create/{id}' , [OfficerPageController::class , 'pDelete'])->name('of.payment.destroy');
    Route::put('/officer/payment-create/{id}' , [OfficerPageController::class , 'pUpdate'])->name('of.payment.update');
    Route::get('/officer/payment-log' , [OfficerPageController::class , 'plog'])->name('of.plog');
    Route::get('/officer/department-report' , [OfficerPageController::class , 'prD'])->name('of.prD');
    Route::get('/officer/payment-report' , [OfficerPageController::class , 'prA'])->name('of.prA');
    Route::get('officer/online-wait' , [OfficerPageController::class , 'wait'])->name('of.online.wait');
    Route::get('officer/online-wait/{id}' , [OfficerPageController::class , 'Oprocess'])->name('of.online.process');
    Route::post('officer/online-wait/{id}' , [OfficerPageController::class , 'Ostore'])->name('of.onlineStore');
    Route::put('officer/online-wait/delete/{id}' , [OfficerPageController::class , 'Odelete'])->name('of.online.delete');
    Route::get('officer/online-log' , [OfficerPageController::class , 'Olog'])->name('of.Olog');

});


//Admin Viewer Parts

Route::get('/viewer-login' , function(){ return view('viewer.login');})->name('vw.login');
Route::post('/viewer-login', [LoginController::class , 'viewer'])->name('viewer.login');
Route::get('/viewer/logout' , [LoginController::class , 'vwLogout'])->name('vw.logout');

Route::middleware('viewer')->group(function () {

    Route::get('/viewer' , [ViewerPageController::class , 'index'])->name('vw.index');
    Route::get('/viewer/admin-list' , [ViewerPageController::class , 'adList'])->name('vw.adminlist');

    Route::get('/viewer/student-list' , [ViewerPageController::class , 'stlist'])->name('vw.stu.list');
    Route::get('/viewer/student-create' , [ViewerPageController::class , 'stcreate'])->name('vw.stu.create');
    Route::post('/viewer/student-create' , [ViewerPageController::class , 'ststore'])->name('vw.stu.store');

    Route::get('/viewer/student/{id}' , [ViewerPageController::class , 'stshow'])->name('vw.stu.show');
    Route::get('/viewer/student/{id}/edit' , [ViewerPageController::class , 'stedit'])->name('vw.stu.edit');
    Route::put('/viewer/student/{id}' , [ViewerPageController::class , 'stupdate'])->name('vw.st.update');
    Route::delete('/viewer/student-del/{id}' , [ViewerPageController::class , 'stdel'])->name('vw.stu.destroy');




    Route::get('/viewer/student-status' , [ViewerPageController::class , 'ststatus'])->name('vw.stu.status');
    Route::get('/viewer/department-list' , [ViewerPageController::class , 'deplist'])->name('vw.deplist');
    Route::get('/viewer/session-list' , [ViewerPageController::class , 'seslist'])->name('vw.seslist');

    Route::get('/viewer/payment-individual' , [ViewerPageController::class , 'inD'])->name('vw.inD');
    Route::get('/viewer/department-report' , [ViewerPageController::class , 'prD'])->name('vw.prD');
    Route::get('/viewer/payment-report' , [ViewerPageController::class , 'prA'])->name('vw.prA');





});