<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory'; // Specify the table name explicitly

    protected $fillable = [
        'accountable_personnel_id',
        'division_id',
        'operating_units_id', // Fixed typo
        'makes_id',
        'types_id',
        'province_id',
        'status_id',
        'brand',
        'model',
        'serial_number',
        'description',
        'property_number',
        'unit_value',
        'acquisition_date',
        'year_acquired',
        'balance_per_card',
        'on_hand_per_count',
        'source',
        'remarks',
    ];

    // Relationships
    public function accountable_personnelRelation()
    {
        return $this->belongsTo(AccountablePersonnel::class, 'accountable_personnel_id', 'id');
    }

    public function divisionRelation()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function provinceRelation()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }

    public function operating_uniRelationt()
    {
        return $this->belongsTo(OperatingUnit::class, 'operating_unit_id', 'id');
    }

    public function makeRelation()
    {
        return $this->belongsTo(Make::class, 'makes_id', 'id');
    }

    public function typeRelation()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function statusRelation()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public static function validationRules($id = null)
    {
        return [
            'accountable_personnel_id' => 'required|exists:accountable_personnels,id', // Fixed table name
            'division_id' => 'required|exists:divisions,id',
            'operating_unit_id' => 'required|exists:operating_units,id',
            'make_id' => 'required|exists:makes,id',
            'type_id' => 'required|exists:types,id',
            'brand' => 'nullable|string|max:100',
            'model' => 'nullable|string|max:100',
            'province_id' => 'required|exists:province,id',
            'serial_number' => 'nullable|string|max:100',
            'description' => 'nullable|string|max:255',
            'property_number' => 'nullable|integer',
            'unit_value' => 'nullable|numeric',
            'acquisition_date' => 'nullable|date',
            'year_acquired' => 'nullable|integer|digits:4',
            'balance_per_card' => 'nullable|integer',
            'on_hand_per_count' => 'nullable|integer',
            'source' => 'nullable|string|max:100',
            'remarks' => 'nullable|string|max:255',
            'status_id' => ['nullable', 'exists:statuses,id', Rule::unique('inventory')->ignore($id)],
        ];
    }

    // Apply validation rules before saving
    public function validate($id = null)
    {
        return $this->validate(static::validationRules($id));
    }
}
