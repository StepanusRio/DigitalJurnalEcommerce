<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Redirect extends Component
{
  public function render()
  {
    $user= Auth::user();
    $utyp= $user->usertype;
    if ($utyp =='1') {
      return view('dashboard');
    }else{
      return view('pages.home.welcome')->layout('layouts.home.home');
    }
  }
}
