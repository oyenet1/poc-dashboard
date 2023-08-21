<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use Livewire\Component;

class Show extends Component
{
    public Consultation $invoice;
    public function render()
    {
        return view('livewire.consultation.show');
    }
}