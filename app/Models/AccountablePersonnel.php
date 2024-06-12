<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountablePersonnel extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'accountable_personnel_id', 'id'); // Fixed foreign key column name
    }
}
