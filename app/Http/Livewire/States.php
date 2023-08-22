<?php

namespace App\Http\Livewire;

use App\Models\ServiceModel;
use Livewire\Component;

class States extends Component
{
    public ServiceModel $state;

    public function render()
    {
        return view('livewire.states')->layout('layouts.dashboard');
    }
}