<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

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

// // Route::post('/cashier/savePayment','savePayment');
// // Route::get('/student','showReceipt');

// // Route::post('/cashier/deleteSaleDetail','deleteSaleDetail');

// Route::controller(StudentController::class)->group(function () {
//     Route::get('/student','index');
//     Route::get('/student/create','create');
//     // Route::get('/cashier/getMenuByCategory/{category_id}','getMenuByCategory');
//     // Route::get('/cashier/getTable','getTables');
//     // Route::post('/cashier/orderFood','orderFood');
//     // Route::get('/cashier/getSaleDetailsByTable/{table_id}','getSaleDetailsByTable');
//     // Route::post('/cashier/confirmOrderStatus','confirmOrderStatus');
//     // Route::post('/cashier/savePayment','savePayment');
//     // Route::get('/cashier/showReceipt/{saleID}','showReceipt');
    
//     // Route::post('/cashier/deleteSaleDetail','deleteSaleDetail');
//     });

Route::resource("/student", StudentController::class);
