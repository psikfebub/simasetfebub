<?php

namespace App\Http\Controllers;

use App\Models\Equipments;
use App\Models\Units;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function getEquipment()
    {
        $equipments = Equipments::all();
        return view('equipment', ['equipments' => $equipments]);
    }
    public function add()
    {
        $units = Units::all();
        return view('addequipment',['units' => $units]);
    }

    public function create(Request $req)
    {
        $equipments = new Equipments;
        $equipments->name = $req->name;
        $equipments->spesifications = $req->name;
        $equipments->merek = $req->name;
        $equipments->year = $req->name;
        $equipments->pic = $req->pic;
        $equipments->unit_id = $req->unit_id;
        $equipments->locations = $req->locations;
        $equipments->save();
        return redirect('/equipment');
    }
    public function edit($id)
    {
        $units = Units::all();
        $equipments = Equipments::find($id);
        return view('editequipment', ['equipments' => $equipments, 'units' => $units]);
    }
    public function update($id, Request $req)
    {
        $equipments = Equipments::find($id);
        $equipments->name = $req->name;
        $equipments->spesifications = $req->name;
        $equipments->merek = $req->name;
        $equipments->year = $req->name;
        $equipments->pic = $req->pic;
        $equipments->unit_id = $req->unit_id;
        $equipments->locations = $req->locations;
        $equipments->save();
        return redirect('/equipment');
    }

    public function delete($id)
    {
        $equipments = Equipments::find($id);
        $equipments->delete();
        return redirect('/equipment');
    }
}
