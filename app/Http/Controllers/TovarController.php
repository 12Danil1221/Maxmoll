<?php

namespace App\Http\Controllers;

use App\Card;
use App\Category;
use App\Tovar;
use Illuminate\Http\Request;

class TovarController extends Controller
{
    public function display_card()
    {
        # display card
        $cards = Card::all();
        $categories = Category::all();

        return view('display_card', compact('cards', 'categories'));
    }
    public function add_card(Request $request)
    {
        # add card
       $request->validate([
    'name'=>'required', 'category'=>'required', 'slug'=>'required', 'price'=>'required', 'image'=>'required', 'description'=>'required'
        ]);
        
         Card::create($request->all());

        session()->flash('success', 'Товар добавлен в корзину');

        return redirect()->route('display_card');
    }
        public function destroy_card(Card $card)
    {
        # delete card
        
         $card->delete();

        session()->flash('danger', 'Товар убран из корзины');

        return redirect('welcome');
    }
    public function display_detail_tovar(Tovar $tovar)
    {
        # Display Detail Tovar
        $categories = Category::all();

        return view('display_detail_tovar', compact('tovar', 'categories'));
    }
}