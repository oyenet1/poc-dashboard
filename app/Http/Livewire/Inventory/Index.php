<?php

namespace App\Http\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Artesaos\SEOTools\Facades\SEOTools;

class Index extends Component
{
    // protected $paginationTheme = 'bootstrap';
    use WithFileUploads, WithPagination;
    public $name, $code, $quantity, $price, $image, $category, $cid;
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
        $this->name = null;
        $this->code = null;
        $this->quantity = null;
        $this->price = null;
        $this->image = null;
        $this->category = null;
        $this->search = null;
        $this->cid = null;
        $this->form = null;
        $this->update = null;
        $this->resetPage();
    }

    public function updatingSearch()
    {
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

    function save()
    {
        $data = $this->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:1',
            'quantity' => 'required|numeric|min:1',
            'category' => 'nullable',
        ], ['status.required' => 'kindly select Inventory type']);
        $saved = Inventory::create($data);

        if ($saved) {
            $this->form = false;

            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'confirmButton' => '#0d2364',
                'text' => $saved->name . ' has been added to list of inventories with code number ' . $saved->code,
                'title' => 'Inventory added Successfully',
                'timer' => 5000,
            ]);

            $this->refreshInputs();
        }
        return redirect()->back();
    }

    function edit(Inventory $course)
    {
        $this->cid = $course->id;
        $this->code = $course->code;
        $this->name = $course->name;
        $this->category = $course->category;
        $this->quantity = $course->quantity;
        $this->price = $course->price;
        $this->form = true;
        $this->update = true;
    }

    function update()
    {
        $data = $this->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:1',
            'quantity' => 'required|numeric|min:1',
            'category' => 'nullable',
        ]);
        $saved = Inventory::find($this->cid)->update($data);

        if ($saved) {

            $this->refreshInputs();

            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'confirmButton' => '#0d2364',
                'text' => 'Inventory has been corrected and updated',
                'title' => 'Inventory updated Successfully',
                'timer' => 5000,
            ]);

        }
        return redirect()->back();
    }

    public function confirmDelete(Inventory $inventory)
    {

        $this->cid = $inventory->id;
        $this->dispatchBrowserEvent('swal:confirm');
    }

    public function delete()
    {

        $Inventory = Inventory::findOrFail($this->cid);
        $true = $Inventory->delete();

        if ($true) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'A Inventory has been removed from the system including all the associated data',
                'title' => 'Deleted Successfully',
                'timer' => 5000,
            ]);
        }
        $this->refreshInputs();
    }
    public function mount()
    {

        SEOTools::setTitle('Inventoriess- ' . config('app.name'));
        SEOTools::setDescription('Lisy of all Inventories');
        SEOTools::opengraph()->setUrl('http://bowofade.com');
        SEOTools::setCanonical('https://bowofade.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@fade_bowofade');
        SEOTools::jsonLd()->addImage(asset('img/logo.png'));
    }
    public function render()
    {
        $term = "%$this->search%";
        $inventories = Inventory::
            where('code', 'LIKE', $term)
            ->orWhere('name', 'LIKE', $term)
            ->orWhere('price', 'LIKE', $term)
            ->orWhere('category', 'LIKE', $term)
            // ->orWhereHas('level', function (Builder $query) {
            //     $query->where('name', 'LIKE', "%$this->search%");
            // })
            ->paginate($this->perPage);
        return view('livewire.inventory.index', compact(['inventories']));
    }
}