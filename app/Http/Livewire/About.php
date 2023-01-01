<?php

namespace App\Http\Livewire;

use Livewire\Component;

class About extends Component
{
  public function render()
  {
    return view('pages.home.about')->layout('layouts.home.home');
  }
}
