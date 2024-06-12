<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    use HasFactory;
    protected $table = 'makes';
    protected $fillable = ['name'];

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'makes_id', 'id'); // Correct foreign key column name
    }
}
