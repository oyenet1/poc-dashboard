<?php

namespace App\Http\Livewire\Consultation;

use App\Models\Consultation;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $cid;
    use WithPagination;
    public $perPage = 25;

    public $search = "";
    public $checked = [];
    protected $listeners = [
        'deleteConfirm' => 'delete',
        'deleteMutipleConfirm' => 'buckDelete'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmDelete(Consultation $consult)
    {

        $this->cid = $consult->id;
        $this->dispatchBrowserEvent('swal:confirm');
    }

    function pay(Consultation $consult)
    {
        if ($consult->status == "unpaid") {
            $update = $consult->update(['status' => 'paid']);
            if ($update) {
                $this->dispatchBrowserEvent('swal:success', [
                    'icon' => 'success',
                    'text' => 'This invoice has been maked as paid',
                    'title' => 'Invoice paid Successfully',
                    'timer' => 5000,
                ]);
            }
        } else {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'error',
                'text' => 'This invoice has been paid for',
                'title' => 'Action not permitted',
                'timer' => 5000,
            ]);
        }

    }

    public function delete()
    {

        $consult = Consultation::findOrFail($this->cid);
        $true = $consult->delete();

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'Record has been removed from the system including all the associated data(invoices)',
                'title' => 'Deleted Successfully',
                'timer' => 5000,
            ]);
        }
        $this->resetPage();
    }
    public function render()
    {
        $consultations = Consultation::with(['user', 'inventories', 'patient'])->paginate($this->perPage);
        return view('livewire.consultation.index', compact(['consultations']));
    }
}