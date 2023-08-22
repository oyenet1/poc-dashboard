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
        $values = ServiceModel::
            selectRaw('location as name, count(*) as services')
            ->groupBy('location')
            ->orderByDesc('services')
            ->pluck('services', 'name')
            ->values();
        $stateName = ServiceModel::
            selectRaw('location as name, count(*) as services')
            ->groupBy('location')
            ->orderByDesc('services')
            ->pluck('name')
            ->values()
            ->toArray();
        // ->values();
        return view('livewire.admin-dashboard', compact(['states', 'values', 'stateName']))->layout('layouts.dashboard');
    }
}