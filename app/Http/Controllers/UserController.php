<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3' , 'max:10'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'max:200']
        ]);
        return "Hello from controller";
    }
}
