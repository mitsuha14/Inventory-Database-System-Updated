<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'provinces';
    protected $fillable = ['name'];
    
    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'province_id', 'id'); // Correct foreign key column name
    }
}
