<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accountController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','dashboard')->name("dashboard");
Route::view('/AddAccount','Accounts')->name("addAccount");
// Route::view('/ViewAccounts','Accounts')->name("viewAccount");

Route::controller(accountController::class)->group(function(){
    Route::post("/AddAccount", "insertAccounts")->name("add_account");
    Route::get("/ViewAccounts", "fetchAccounts")->name("viewAccount");
    Route::get("/UpdateAccount/{id}", "fetchUpdateAccount")->name("updateAccount");
    Route::post("/UpdateAccount/{id}", "insertUpdatedAccount")->name("update_account");
});
