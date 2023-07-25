<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'specifications',
        'merek',
        'year',
        'locations',
        'pic'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
