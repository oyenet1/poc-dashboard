<?php

namespace App\Http\Livewire;

use App\Models\ServiceModel;
use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        $states = ServiceModel::
            selectRaw('location as name, count(*) as services')
            ->groupBy('location')
            ->orderByDesc('services')
            ->get();
        return view('livewire.admin-dashboard', compact(['states']))->layout('layouts.dashboard');
    }
}