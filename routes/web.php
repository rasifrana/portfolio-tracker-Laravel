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
    $assets = [];
    $assetsVal = 0;
    $color = '';
    // $investments = auth()->user()->usersInvestments()->latest()->get();
    
    if (auth()->check()) {
        // $investments = [auth()->user()->usersInvestments()->latest()->get()];
        $investments = Investment::where('user_id', auth()->id())->get(); 
        foreach ($investments as $investment) {
            $assetVal = $investment->price * $investment->quantity;
            $assetsVal+=$assetVal;
            $investment->assetVal = $assetVal;
            if($investment->asset_type == 'Stock'){
                $color = 'primary';
            } elseif($investment->asset_type == 'Crypto'){
                $color = 'info';
            } elseif($investment->asset_type  == 'Real Estate'){
                $color = 'success';
            }elseif($investment->asset_type == 'Bonds') {
                $color = 'warning';
            } else {
                $color = 'dark';
            }
            $investment->color = $color;
          }
          $assets['investments'] = $investments;
          $assets['assetsVal'] = $assetsVal;

        //  echo "<pre>".print_r($assets,true)."</pre>"; die();
    }
    return view('home', ['assets' => $assets, 'categories' => $categories]);
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);

// Invstment related routes
Route::post('create-investment', [InvestmentController::class, 'createInvestment']);
Route::get('/edit-investment/{investment}', [InvestmentController::class, 'showEditScreen']);
Route::put('/edit-investment/{investment}', [InvestmentController::class, 'updateInvestment']);
Route::delete('/delete-investment/{investment}', [InvestmentController::class, 'deleteInvestment']);