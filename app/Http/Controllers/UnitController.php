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

    public function add(){
        return view('addunit');
    }

    public function create(Request $req){
        $units = new Units;
        $units->name = $req->name;
        $units->locations = $req->locations;
        $units->save();
        return redirect('/unit')->with('success','Unit atau departemen berhasil ditambahkan');
    }

    
    
}
