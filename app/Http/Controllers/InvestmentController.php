<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function createInvestment(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'asset-type' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['asset_type'] = strip_tags($incomingFields['asset-type']);
        $incomingFields['price'] = strip_tags($incomingFields['price']);
        $incomingFields['quantity'] = strip_tags($incomingFields['quantity']);
        $incomingFields['user_id'] = auth()->id();
        Investment::create($incomingFields);
        return redirect('/home');
    }

    public function showEditScreen(Investment $investment) {
        if (auth()->user()->id !== $investment['user_id']) {
            return redirect('/');
        }
        $categories = Category::all();

        return view('edit-investment', ['investment' => $investment, 'categories' => $categories]);
    }

    public function updateInvestment(Investment $investment, Request $request) {
        if (auth()->user()->id !== $investment['user_id']) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'asset-type' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['asset_type'] = strip_tags($incomingFields['asset-type']);

        $investment->update($incomingFields);
        return redirect('/home');
    }

    public function deleteInvestment(Investment $investment){
        if (auth()->user()->id === $investment['user_id']) {
            $investment->delete();
        }
        return redirect('/');
    }
}
