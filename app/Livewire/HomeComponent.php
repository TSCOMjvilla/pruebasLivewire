<?php

namespace App\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.home-component');
    }
}
