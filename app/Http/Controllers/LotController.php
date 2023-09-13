<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lot;

class LotController extends Controller
{
    //
    public function create(Request $request){

        $request->validate([
            'code' =>'required',
            'libellé' =>'required',
            
        ]);

        $lot = new Lot();
        $lot -> code = $request -> input('code');
        $lot -> libellé = $request ->input('libellé');
        $lot ->save();

        return response()->json($lot);
    }
}
