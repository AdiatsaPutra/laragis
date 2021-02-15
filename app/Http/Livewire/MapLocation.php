<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MapLocation extends Component
{
    public $latt, $long;

    public function render()
    {
        return view('livewire.map-location');
    }
}
