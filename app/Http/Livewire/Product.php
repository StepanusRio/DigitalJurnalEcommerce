<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Product extends Component
{
  public  $product_name,
          $product_price,
          $product_desc;
  public function render()
  {
    $products = Products::all();
    $user = Auth::user();
    $userstat = $user->status;

    return view('pages.products.all',['product'=>$products,'userstats'=>$userstat])
    ->layout('layouts.home.home');
  }
}
