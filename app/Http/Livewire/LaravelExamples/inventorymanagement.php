<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\Inventory;

class inventorymanagement extends Component
{
    public $inventories;

    public function mount()
    {
        $this->inventories = Inventory::with([
            'accountablePersonnelRelation',
            'divisionRelation',
            'provinceRelation',
            'operatingunitRelation',
            'makeRelation',
            'typeRelation',
            'statusRelation'
        ])->get();
    }

    public function render()
    {
        return view('livewire.laravel-examples.inventorymanagement', [
            'inventories' => $this->inventories,
        ]);
    }
}
