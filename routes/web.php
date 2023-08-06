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
    $investments = [];
    // echo "<pre>".print_r(auth()->user(),true)."</pre>"; die();
    // $investments = auth()->user()->usersInvestments()->latest()->get();
    
    if (auth()->check()) {
        // $investments = [auth()->user()->usersInvestments()->latest()->get()];
        $investments = Investment::where('user_id', auth()->id())->get();
        // foreach($investments as $invest) {
        //     echo "<pre>".print_r($invest['title'],true)."</pre>"; die();
        // }
        
    }
    return view('home', ['investments' => $investments]);
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);

// Invstment related routes
Route::post('create-investment', [InvestmentController::class, 'createInvestment']);
Route::get('/edit-investment/{investment}', [InvestmentController::class, 'showEditScreen']);
Route::put('/edit-investment/{investment}', [InvestmentController::class, 'updateInvestment']);
Route::delete('/delete-investment/{investment}', [InvestmentController::class, 'deleteInvestment']);