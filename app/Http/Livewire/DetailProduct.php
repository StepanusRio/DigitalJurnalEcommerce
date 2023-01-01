<?php

namespace App\Http\Livewire;
use Livewire\Component;

use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class DetailProduct extends Component
{
  public $idproduct;
  public  $product_name,
    $product_price,
    $product_desc,
    $user;

  public function mount($idproduct)
  {
    $this->product = Products::find($idproduct);
  }


  public function render()
  {
    $this->user = Auth::user();
    return view('pages.products.detail')
    ->layout('layouts.home.home');
  }
}
