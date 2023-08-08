<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'specifications',
        'merek',
        'year',
        'unit_id',
        'locations',
        'pic'
    ];

    public function unit()
    {
        return $this->belongsTo(Units::class);
    }
}
