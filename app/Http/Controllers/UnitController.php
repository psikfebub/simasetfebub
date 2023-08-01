<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UnitController extends Controller
{
    public function getUnit()
    {
        $units = Units::all();
        return view('unit', ['units' => $units]);
    }

    public function add()
    {
        return view('addunit');
    }

    public function create(Request $req)
    {
        $units = new Units;
        $units->id = Str::uuid()->toString();
        $units->nama = $req->nama;
        $units->lantai = $req->lantai;
        $units->gedung = $req->gedung;
        $units->save();
        return redirect('/unit');
    }
    public function edit($id)
    {
        $units = Units::find($id);
        return view('editunit', ['units' => $units]);
    }
    public function update($id, Request $req)
    {
        $units = Units::find($id);
        $units->nama = $req->nama;
        $units->lantai = $req->lantai;
        $units->gedung = $req->gedung;
        $units->save();
        return redirect('/unit');
    }

    public function delete($id)
    {
        $units = Units::find($id);
        $units->delete();
        return redirect('/unit');
    }
}
