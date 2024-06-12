<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $table = 'divisions';
    protected $fillable = ['name'];

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'division_id', 'id');
    }
}
