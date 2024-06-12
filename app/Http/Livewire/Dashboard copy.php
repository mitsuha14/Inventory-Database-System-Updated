<?php

// Dashboard.php (Livewire Component)
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Inventory;

class Dashboard extends Component
{
    public $inventories;

    public function mount()
    {
        $this->inventories = Inventory::with('accountable_personnelRelation', 'divisionRelation', 'provinceRelation', 'operating_uniRelationt', 'makeRelation', 'typeRelation', 'statusRelation')->get();
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'inventories' => $this->inventories,
        ]);
    }
}
