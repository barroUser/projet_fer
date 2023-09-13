<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trajets;


class TrajetController extends Controller
{
    //
    public function create(Request $request){

        $request->validate([
            'nom' =>'required',
            'ville_depart' =>'required',
            'ville_arrivee' =>'required',
            'distance' =>'required',
        ]);

        $trajet = new Trajets();
        $agent -> nom = $request -> input('nom');
        $agent -> ville_depart = $request ->input('ville_depart');
        $agent -> ville_arrivee = $request ->input('ville_arrivee');
        $agent -> distance = $request ->input('distance');
        $agent ->save();

        return response()->json($agent);
    }
}
