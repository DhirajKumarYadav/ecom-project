<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserModuleController;
use App\Http\Controllers\ERPController;
use App\Http\Controllers\TimesheetController;
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

Route::get('/',[UserModuleController::class , 'loginUser']);

Route::get('layout', function () {
    return view('layout');
});

Route::get('apply', function () {
    return view('apply');
});
Route::post('store',[LeaveController::class,'saveleave']);
Route::get('create',[LeaveController::class,'show']);


/*Route::get('create', function () {
    return view('create');
});*/


Route::get('approve', function () {
    return view('approve');
});
/*Route::get('login', function () {
    return view('login');
});*/

/*Route::get('ldetails', function () {
    return view('leave-details');
});*/
Route::post('adaction',[LoginController::class,'adaction']);

Route::post('adlogin',[LoginController::class,'login']);
Route::get('adlogin',[LoginController::class,'loginuser']);
Route::get('admin',[LoginController::class,'show']);

Route::get('details/{id}',[LoginController::class,'viewDetails']);

Route::get('takeaction',[LoginController::class,'adaction']);

//Route::get('actionad',[LoginController::class,'adaction']);

//--//team 1
Route::get('layout', function () {
    return view('layout');
});


Route::post('add',[UserModuleController::class,'addUser']);
Route::get('add',[UserModuleController::class , 'User']);
Route::get('update',[UserModuleController::class , 'update']);


Route::post('login',[UserModuleController::class , 'login']);
Route::get('login',[UserModuleController::class , 'loginUser']);

Route::get('ex', function () {
    if(Session::exists('user')) {
        return view('executivedashboard');
    }else{
        return view('not_authorized');
    }
});
Route::get('dash', function () {    
    return view('dashboard');
});

Route::get('myprofile', function () {    
    return view('get');
});



Route::get('logout',[UserModuleController::class , 'logoutUser']);
Route::get('get',[UserModuleController::class , 'getUser']);


//team 2
Route::get('createholiday', function () {
    return view('createholiday');
});

Route::post('store', [ERPController::class, 'store']);
Route::get('holiday', [ERPController::class, 'holiday']);

Route::get('editholiday/{id}', [ERPController::class, 'edit']);
Route::post('updateholiday/{id}', [ERPController::class, 'update']);

Route::get('deleteholiday/{id}', [ERPController::class, 'destroy']);

// ## Update
// Route::get('edit/{id}', 'ERPController@edit')->name('edit');
// Route::post('update/{id}', 'ERPController@update')->name('update');

// ## Delete
// Route::get('delete/{id}', 'ERPController@destroy')->name('delete');


Route::get('/timesheet', function () {
    return view('timesheet');
});


Route::post('/store-timesheet', [TimesheetController::class, 'store']);


Route::get('get-timesheet', [TimesheetController::class, 'index']);
