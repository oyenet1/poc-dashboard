<?php

namespace App\Http\Livewire;

use App\Models\ServiceModel;
use App\Models\VehicleModel;
use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        $vehicles = VehicleModel::
            selectRaw('location as name, count(*) as services')
            ->groupBy('location')
            ->orderByDesc('services')
            ->get();

        // $states = ServiceModel::
        //     selectRaw('location as name, count(*) as services')
        //     ->where('serviceCode', 4)
        //     ->groupBy('location')
        //     ->orderByDesc('services')
        //     ->get();
        $values = ServiceModel::
            selectRaw('location as name, count(*) as services')
            ->where('serviceCode', 4)
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
        return view('livewire.admin-dashboard', compact(['stateName', 'values', 'vehicles']))->layout('layouts.dashboard');
    }
}