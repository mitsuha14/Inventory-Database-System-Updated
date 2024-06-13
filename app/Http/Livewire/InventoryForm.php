<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Inventory;
use App\Models\AccountablePersonnel;
use App\Models\Division;
use App\Models\Province;
use App\Models\OperatingUnit;
use App\Models\Make;
use App\Models\Type;
use App\Models\Status;

class InventoryForm extends Component
{
    public $inventory;
    public $accountablePersonnelOptions = [];
    public $divisionOptions = [];
    public $provinceOptions = [];
    public $operatingUnitOptions = [];
    public $makeOptions = [];
    public $typeOptions = [];
    public $statusOptions = [];

    public function mount($inventoryId = null)
    {
        $this->inventory = $inventoryId ? Inventory::findOrFail($inventoryId) : new Inventory();
        $this->loadOptions();
    }

    public function loadOptions()
    {
        $this->accountablePersonnelOptions = AccountablePersonnel::pluck('name', 'id');
        $this->divisionOptions = Division::pluck('name', 'id');
        $this->provinceOptions = Province::pluck('name', 'id');
        $this->operatingUnitOptions = OperatingUnit::pluck('name', 'id');
        $this->makeOptions = Make::pluck('name', 'id');
        $this->typeOptions = Type::pluck('name', 'id');
        $this->statusOptions = Status::pluck('name', 'id');
    }

    protected function rules()
    {
        return [
            'inventory.accountable_personnel_id' => 'required',
            'inventory.division_id' => 'required',
            'inventory.province_id' => 'required',
            'inventory.operating_unit_id' => 'required',
            'inventory.make_id' => 'required',
            'inventory.type_id' => 'required',
            'inventory.status_id' => 'required',
            'inventory.brand' => 'nullable|string|max:100',
            'inventory.model' => 'nullable|string|max:100',
            'inventory.serial_number' => 'nullable|string|max:100',
            'inventory.description' => 'nullable|string|max:255',
            'inventory.property_number' => 'nullable|integer',
            'inventory.unit_value' => 'nullable|numeric',
            'inventory.acquisition_date' => 'nullable|date',
            'inventory.year_acquired' => 'nullable|integer|digits:4',
            'inventory.balance_per_card' => 'nullable|integer',
            'inventory.on_hand_per_count' => 'nullable|integer',
            'inventory.source' => 'nullable|string|max:100',
            'inventory.remarks' => 'nullable|string|max:255',
        ];
    }

    public $isSubmitting = false;

    public function save()
    {
        $this->isSubmitting = true;
        $this->validate();
    
        $this->inventory->save();
    
        $this->isSubmitting = false;
    
        session()->flash('message', 'Inventory successfully saved.');
    
        return redirect()->route('inventory-management');
    }
    

    public function render()
    {
        return view('inventory.create', [
            'accountablePersonnelOptions' => $this->accountablePersonnelOptions,
            'divisionOptions' => $this->divisionOptions,
            'provinceOptions' => $this->provinceOptions,
            'operatingUnitOptions' => $this->operatingUnitOptions,
            'makeOptions' => $this->makeOptions,
            'typeOptions' => $this->typeOptions,
            'statusOptions' => $this->statusOptions,
        ]);
    }
}
