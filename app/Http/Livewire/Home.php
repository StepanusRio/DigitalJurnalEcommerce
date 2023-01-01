<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('pages.home.welcome')->layout('layouts.home.home');
    }
}
