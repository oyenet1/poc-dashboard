<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use App\Models\Inventory;
use App\Models\User;
use App\Models\Patient;
use Livewire\Component;

class Create extends Component
{
    public $patient_id, $user_id, $admitted, $fee, $purpose, $visited_at, $checkout_at, $status, $inventory_id, $consultation_id, $quantity = 1;

    protected $listeners = [
        'redirectToConsultationPage' => 'redirectToConsultationListPage'
    ];
    public $orders = [];
    public $count = 0;
    public $inventories = [];
    function refreshInputs()
    {
        $this->patient_id = null;
        $this->user_id = null;
        $this->admitted = null;
        $this->fee = null;
        $this->purpose = null;
        $this->quantity = null;
        $this->visited_at = null;
        $this->checkout_at = null;
        $this->status = null;
        $this->inventory_id = null;
        $this->consultation_id = null;
        $this->orders = [];
    }

    function save()
    {
        $data = $this->validate([
            'patient_id' => "required",
            'user_id' => 'nullable',
            'admitted' => 'nullable',
            'purpose' => 'required',
            'quantity.*' => 'nullable|numeric',
            'fee' => 'required|numeric',
            'visited_at' => 'required|before_or_equal:today',
            'checkout_at' => 'nullable|after_or_equal:today',
            'inventory_id.*' => 'required'
        ]);

        $consult = Consultation::create($data);

        // associated the data to relationship
        foreach ($this->orders as $order) {
            $consult->inventories()->attach($order['inventory_id'], ['quantity' => $order['quantity']]);
            $this->count++;
        }

        if ($this->count == count($this->orders)) {
            $this->refreshInputs();

            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'confirmButton' => '#0d2364',
                'text' => 'Data has been added to list of consultation records',
                'title' => 'Consultation saved Successfully',
                'timer' => 5000,
            ]);
        }
        $this->dispatchBrowserEvent('redirectTo');
    }

    function redirectToConsultationListPage()
    {
        return redirect()->route('consultations.index');
    }

    function addOrder()
    {
        $this->orders[] = ['inventory_id' => '', 'quantity' => 1];
    }

    function removeOrder($index)
    {
        unset($this->orders[$index]);
        $this->orders = array_values($this->orders);
    }

    function mount()
    {
        $this->inventories = Inventory::all();
        $this->orders = [
            ['inventory_id' => '', 'quantity' => 1]
        ];
    }
    public function render()
    {
        $patients = Patient::select(['id', 'name'])->get();
        $doctors = User::whereRelation('roles', 'name', 'doctor')->get();
        return view('livewire.consultation.create', compact(['patients', 'doctors']));
    }
}