<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request)
    {
        if($request->user()->hasRole('operator')){
            return view('operator');
        }
        abort(403);
    }
}
