<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Midtrans extends Component
{
  public function render()
  {

    $user = Auth::user();
    $userid = $user->id;
    $dorder = Order::where('user_id', '=', $userid)->get();

    // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = config('midtrans.ServerKey');
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = false;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;

    foreach ($dorder as $dorder) {
      $params = array(
        'transaction_details' => array(
          'order_id' => $dorder->id,
          'gross_amount' => $dorder->price,
        ),
        'customer_details' => array(
          'first_name' => $dorder->name,
          'email' => $dorder->email,
          'phone' => $dorder->phone,
        ),
      );

      $snapToken = \Midtrans\Snap::getSnapToken($params);
      return view('pages.midtrans.detailorder',compact('dorder', 'snapToken'))->layout('layouts.midtrans.midtrans');
    }
  }
}
