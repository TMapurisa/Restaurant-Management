<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class,"index"]) ;
Route::get("/users", [AdminController::class,"user"]) ;
Route::get("/foodmenu", [AdminController::class,"foodmenu"]) ;
Route::post("/uploadfood", [AdminController::class,"upload"]) ;
Route::get("/deleteuser/{id}", [AdminController::class,"deleteuser"]) ;
Route::get("/deletemenu/{id}", [AdminController::class,"deletemenu"]) ;
Route::get("/updateview/{id}", [AdminController::class,"updateview"]) ;
Route::get("/search}", [AdminController::class,"search"]) ;
Route::get("/orders", [AdminController::class,"orders"]) ;
Route::post("/update/{id}", [AdminController::class,"update"]) ;
Route::post("/addcart/{id}", [HomeController::class,"addcart"]) ;
Route::get("/redirects", [HomeController::class,"redirects"]) ;
Route::get("/showcart/{id}", [HomeController::class,"showcart"]) ;
Route::get("/removeCartItem/{foodid}",[HomeController::class,"removeCartItem"]);
Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
