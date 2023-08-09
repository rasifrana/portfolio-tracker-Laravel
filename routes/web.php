<?php

use App\Models\User;
use App\Models\Category;
use App\Models\Investment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvestmentController;

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

    return view('welcome');
});

Route::get('/home', function () {
    $categories = Category::all();
    // echo "<pre>".print_r($categories,true)."</pre>"; die();
    $investments = [];
    // $investments = auth()->user()->usersInvestments()->latest()->get();
    
    if (auth()->check()) {
        // $investments = [auth()->user()->usersInvestments()->latest()->get()];
        $investments = Investment::where('user_id', auth()->id())->get(); 
    }
    return view('home', ['investments' => $investments, 'categories' => $categories]);
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);

// Invstment related routes
Route::post('create-investment', [InvestmentController::class, 'createInvestment']);
Route::get('/edit-investment/{investment}', [InvestmentController::class, 'showEditScreen']);
Route::put('/edit-investment/{investment}', [InvestmentController::class, 'updateInvestment']);
Route::delete('/delete-investment/{investment}', [InvestmentController::class, 'deleteInvestment']);