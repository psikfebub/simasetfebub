<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;
    // protected $primaryKey = 'uuid'; 
    protected $fillable = [
        'nama', 
        'lantai',
        'gedung',
    ];

}
