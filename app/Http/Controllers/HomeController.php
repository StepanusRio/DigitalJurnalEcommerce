<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Products;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */

  // User Without Login
  public function index()
  {
    $product = products::all();
    return view('home.welcome', compact('product'));
  }

  // See All Products
  public function products()
  {
    $userstats = auth()->user()->status;
    $product = products::all();
    return view('home.product', compact('product', 'userstats'));
  }

  // Add to cart
  public function detailproductbyid($id)
  {
    if (Auth::id()) {
      $user = Auth::user();
      $product = products::find($id);
      return view('home.detail', compact('product', 'user'));
    }
  }

  public function add_cart(Request $request, $id)
  {
    if (Auth::id()) {
      $user = Auth::user();
      $product = products::find($id);
      $cart = new cart;
      $cart->name = $user->name;
      $cart->email = $request->email;
      $cart->phone = $request->phone;
      $cart->address = $request->address;
      $cart->user_id = $user->id;
      $cart->product_name = $product->product_name;
      $cart->price = $product->product_price * $request->quantity;
      $cart->product_id = $product->id;
      $cart->quantity = $request->quantity;
      $cart->save();

      return redirect('cart');
    } else {
      return redirect('login');
    }
  }

  public function remove_cart($id)
  {
    $cart = cart::find($id);
    $cart->delete();
    return redirect()->back();
  }

  public function payment($totalprice)
  {
    $this->saveOrder($totalprice);
    return redirect()->back();
  }

  public function saveOrder($totalprice){
    $user = Auth::user();

    $userid = $user->id;

    $data = cart::where('user_id', '=', $userid)->get();

    foreach ($data as $data) {
      $order = new order;
      $order->name = $data->name;
      $order->email = $data->email;
      $order->phone = $data->phone;
      $order->address = $data->address;
      $order->user_id = $data->user_id;
      $order->product_name = $data->product_name;
      $order->price = $totalprice;
      $order->quantity = $data->quantity;
      $order->product_id = $data->product_id;

      $order->payment_status = 'Unpaid';
      $order->delivery_status = 'processing';

      $order->save();
      $cart_id = $data->id;
      $cart = cart::find($cart_id);
      $cart->delete();
    };
  }

  public function pay($oid)
  {
    $user = Auth::user();
    $userid = $user->id;
    $dorder = order::where('user_id', '=', $userid)->get();

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
      return view('pages.midtrans.detailorder', compact('dorder', 'snapToken'))->layout('layout.midtrans.midtrans');
    }
  }

  public function invoice()
  {
  }

  // See all Cart & checkout
  public function index_checkout()
  {
    $id = Auth::user()->id;
    $carted = cart::where('user_id', '=', $id)->get();
    return view('home.checkout', compact('carted'));
  }


  public function redirect()
  {
    $usertype = Auth::user()->usertype;
    if ($usertype == '1') {
      return view('admin.index');
    } else {
      $product = products::all();
      return view('pages.home.welcome', compact('product'));
    }
  }

  public function callbacknotification(Request $request)
  {
    $serverKey = config('midtrans.ServerKey');
    $hased = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

    if ($hased == $request->signature_key) {
      if ($request->transaction_code == 'capture') {
        $order = order::find($request->order_id);
        $order->update(["payment_status" => "Paid"]);
      }
    }
  }
}
