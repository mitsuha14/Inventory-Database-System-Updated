<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class Edit extends Controller
{
    public function edit()
    {
        return view('inventory.edit');
    }


}

