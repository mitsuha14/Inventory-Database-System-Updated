<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        
        if ($inventory->delete()) {
            return redirect()->route('inventory-management')->with('success', 'Inventory item deleted successfully.');
        } else {
            return redirect()->route('inventory-management')->with('error', 'Failed to delete inventory item.');
        }
    }
}
