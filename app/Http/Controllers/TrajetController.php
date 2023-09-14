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
        $trajet -> nom = $request -> input('nom');
        $trajet -> ville_depart = $request ->input('ville_depart');
        $trajet -> ville_arrivee = $request ->input('ville_arrivee');
        $trajet -> distance = $request ->input('distance');
        $trajet ->save();

        return response()->json([$trajet, "message" =>"votre requête a bien été enregistré."]);
    }
}
