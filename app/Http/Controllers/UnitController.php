<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function getUnit()
    {
        $units = Units::all();
        return view('unit', ['units' => $units]);
    }
}
