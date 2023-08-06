<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function createInvestment(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        Investment::create($incomingFields);
        return redirect('/');
    }

    public function showEditScreen(Investment $investment) {
        if (auth()->user()->id !== $investment['user_id']) {
            return redirect('/');
        }

        return view('edit-investment', ['investment' => $investment]);
    }

    public function updateInvestment(Investment $investment, Request $request) {
        if (auth()->user()->id !== $investment['user_id']) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $investment->update($incomingFields);
        return redirect('/');
    }

    public function deleteInvestment(Investment $investment){
        if (auth()->user()->id === $investment['user_id']) {
            $investment->delete();
        }
        return redirect('/');
    }
}
