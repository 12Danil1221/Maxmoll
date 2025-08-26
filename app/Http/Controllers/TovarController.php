<?php

namespace App\Http\Controllers;

use App\Tovar;
use Illuminate\Http\Request;

class TovarController extends Controller
{
    public function display_card()
    {
        # display card

        return view('display_card');
    }
    public function add_card(Request $request)
    {
        # add card
       $request->validate([
    'name'=>'required', 'category'=>'required', 'slug'=>'required', 'price'=>'required', 'image'=>'required', 'description'=>'required'
        ]);
        
         Tovar::create($request->all());

        session()->flash('success', 'Товар добавлен в корзину');

        return redirect()->route('display_card');
    }
}