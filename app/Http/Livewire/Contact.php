<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
  public function render()
  {
    return view('pages.home.contact')->layout('layouts.home.home');
  }
}
