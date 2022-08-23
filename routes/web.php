<?php

use App\Http\Controllers\Backend\BranchController;
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
    return view('backend.dashboard');
});

//Route group for Branch


Route::group(['prefix'=>'branch'],function(){
//Route for addbranch view
Route::get('/addbranchview',[BranchController::class,'addbranchview'])->name('addbranchview');

// Route for add branch
Route::post('/addbranch',[BranchController::class,'addbranch'])->name('addbranch');

//Route for manage Branch

Route::get('/managebranch',[BranchController::class,'managebranch'])->name('managebranch');

//Route for status Control

Route::get('/status',[BranchController::class,'status'])->name('status');


});


