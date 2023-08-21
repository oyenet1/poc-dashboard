<?php

namespace App\Http\Livewire\Patients;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Artesaos\SEOTools\Facades\SEOTools;

class Index extends Component
{
    use WithFileUploads, WithPagination;
    // public $patients = [];
    public ?array $titles = ["Mr.", "Mrs.", "Ms.", "Prof.", "Dr."];
    public ?array $type = ["in-patient", "out-patient"];

    public $name, $email, $phone, $address, $state, $nationality, $cid, $image, $title, $gender, $department, $occupation, $dob, $status, $lga, $blood_group;
    protected $listeners = [
        'deleteConfirm' => 'delete',
        'deleteMutipleConfirm' => 'buckDelete'
    ];
    public $perPage = 25;
    public $form = false;
    public $checked = [];
    public $update = false;
    public $search = "";
    function refreshInputs()
    {
        $this->title = null;
        $this->email = null;
        $this->name = null;
        $this->phone = null;
        $this->address = null;
        $this->state = null;
        $this->nationality = null;
        $this->image = null;
        $this->gender = null;
        $this->status = null;
        $this->department = null;
        $this->occupation = null;
        $this->dob = null;
        $this->blood_group = null;
        $this->lga = null;
        $this->search = null;
        $this->cid = null;
        $this->form = null;
        $this->update = null;
        $this->resetPage();
    }

    function add()
    {
        $this->update = false;
    }

    function showForm()
    {
        $this->form = true;
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    function save()
    {
        $data = $this->validate([
            'title' => 'required',
            'name' => 'required',
            'phone' => 'required|numeric|digits:10|unique:patients',
            'email' => 'required|email|unique:patients',
            'address' => 'required',
            'status' => 'required',
        ], ['status.required' => 'kindly select patient type']);
        $saved = Patient::create($data);

        if ($saved) {
            $this->form = false;

            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'confirmButton' => '#0d2364',
                'text' => $saved->name . ' has been added to list of patients',
                'title' => 'Patient added Successfully',
                'timer' => 5000,
            ]);

            $this->refreshInputs();
        }
        return redirect()->back();
    }

    public function confirmDelete(Patient $patient)
    {

        $this->cid = $patient->id;
        $this->dispatchBrowserEvent('swal:confirm');
    }

    public function delete()
    {

        $patient = Patient::findOrFail($this->cid);
        $true = $patient->delete();

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'A patient has been removed from the system including all the associated data',
                'title' => 'Deleted Successfully',
                'timer' => 5000,
            ]);
        }
        $this->refreshInputs();
    }
    public function mount()
    {
        // $this->patients = Patient::paginate($this->perPage);
        // where('title', 'LIKE', "%$this->search%")
        //     ->orWhere('name', 'LIKE', "%$this->search%")
        //     ->orWhere('patient_id', 'LIKE', "%$this->search%")
        //     ->orWhere('gender', 'LIKE', "%$this->search%")
        //     ->orWhere('email', 'LIKE', "%$this->search%")
        //     ->orWhere('status', 'LIKE', "%$this->search%")
        //     ->orWhere('phone', 'LIKE', "%$this->search%")
        //     // ->orWhereHas('level', function (Builder $query) {
        //     //     $query->where('name', 'LIKE', "%$this->search%");
        //     // })
        //     ->paginate($this->perPage);
        SEOTools::setTitle('Patients- ' . config('app.name'));
        SEOTools::setDescription('Lisy of all patients');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
    }
    public function render()
    {
        $term = "%$this->search%";
        $patients = Patient::
            where('title', 'LIKE', $term)
            ->orWhere('name', 'LIKE', $term)
            ->orWhere('patient_id', 'LIKE', $term)
            ->orWhere('gender', 'LIKE', $term)
            ->orWhere('email', 'LIKE', $term)
            ->orWhere('status', 'LIKE', $term)
            ->orWhere('phone', 'LIKE', $term)
            // ->orWhereHas('level', function (Builder $query) {
            //     $query->where('name', 'LIKE', "%$this->search%");
            // })
            ->paginate($this->perPage);
        return view('livewire.patients.index', compact(['patients']));
    }
}