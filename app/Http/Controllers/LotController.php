<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lot;

class LotController extends Controller
{

    public function create(Request $request){
        //validation du formulaire
        $request->validate([
            'code' =>'required',
            'libelle' =>'required',
            
        ]);
        //insertion dans la bdd
        $lot = new Lot();
        $lot -> code = $request -> input('code');
        $lot -> libelle = $request ->input('libelle');
        $lot ->save();

        //envoie d'un messages de validation
        return response()->json([
            $lot,
            "message" =>"votre requête a bien été enregistré."
        ]);
    }
}
