<?php

namespace App\Http\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
  public function render()
  {
    $user = Auth::user();
    $userid = $user->id;
    $order = Order::where('user_id', '=', $userid)->get();
    $carted = $this->carted= ModelsCart::all();
    return view('pages.cart.all',compact('order','carted'))->layout('layouts.home.home');
  }
}
