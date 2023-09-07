<?php

namespace App\Http\Livewire;

use App\Models\ServiceModel;
use Livewire\Component;

class States extends Component
{
    public ServiceModel $state;
    public $year;

    function mount()
    {
        $this->year = date('Y');
    }
    public function render()
    {
        $services = ServiceModel::
            selectRaw('count(*) as number, serviceCode')
            ->where('location', $this->state->location)
            ->groupBy('serviceCode')
            ->orderBy('number')
            ->get();

        $total = ServiceModel::
            where('location', $this->state->location)
            ->where('serviceCode', 4)
            ->whereYear('createdAt', $this->year)->count();

        $months = ServiceModel::
            whereYear('createdAt', $this->year)
            ->where('location', $this->state->location)
            ->where('serviceCode', 4)
            ->selectRaw('month(createdAt) as month, count(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();
        return view('livewire.states', compact(['services', 'total', 'months']))->layout('layouts.dashboard');
    }
}