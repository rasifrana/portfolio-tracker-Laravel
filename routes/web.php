<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvestmentController;
use App\Models\Investment;
use App\Models\User;

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

Route::get('/', function () {
    // echo "<pre>".print_r(auth()->user(),true)."</pre>"; die();
    // $investments = auth()->user()->usersInvestments()->latest()->get();
    $investments = Investment::where('user_id', auth()->id())->get();
    // if (auth()->check()) {
    //     $investments = auth()->user()->usersInvestments()->latest()->get();
    // }
    return view('home', ['investments' => $investments]);
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);

Route::post('create-investment', [InvestmentController::class, 'createInvestment']);