<?php

use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Models\Backend\Purchase;
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

Route::get('/status/{id}',[BranchController::class,'status'])->name('status');

//for delete branch
Route::get('deletebranch/{id}',[BranchController::class,'deletebranch'])->name('deletebranch');

//Route for editbranchview 
Route::get('editbranchview/{id}',[BranchController::class,'editbranchview'])->name('editbranchview');

// for editbranch

Route::post('editbranch/{id}',[BranchController::class,'editbranch'])->name('editbranch');

});


//Route group for Product

Route::group(['prefix'=>'/product'],function(){

    //Route for manageproduct

    Route::get('productaddview',[ProductController::class,'productaddview'])->name('productaddview');

    //Url for productadd
    Route::post('/productadd',[ProductController::class,'addproduct']);

    // Route for ProductView

    Route::get('/productview',[ProductController::class,'productview']);

    // Route for delete Product 

    Route::get('/deleteproduct/{id}',[ProductController::class,'deleteproduct']);

    // Route for updateshow in modal 

    Route::get('/updateshow/{id}',[ProductController::class,'updateshow']);

    //Route for update Product by ajax

    Route::post('/updateproduct/{id}',[ProductController::class,'updateproduct']);


});

//Route group for Purchase
   
  Route::group(["prefix"=>"/purchase"],function(){
   //Route for Purchaseview
    Route::get('/purchaseview',[PurchaseController::class,'purchaseview'])->name('purchaseview');
     // Route for show cost Price 

    Route::get('/costprice/{id}',[PurchaseController::class,'costprice']);

    //Route for store data in Purchase table
    Route::post('/store',[PurchaseController::class,'purchasestore']);




  });

  Route::group(["prefix"=>"/stock"],function(){

     Route::get('/stock',[PurchaseController::class,'stockview']);
  });

