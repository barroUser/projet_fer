<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peages;


class PeageController extends Controller
{
    //
    public function create(Request $request){

        $request->validate([
            'nom' =>'required',
            'adresse' =>'required',
            'ville' =>'required',
            'pays' =>'required',
        ]);

        $peage = new Peages();
        $peage -> nom = $request -> input('nom');
        $peage -> adresse = $request ->input('adresse');
        $peage -> ville = $request ->input('ville');
        $peage -> pays = $request ->input('pays');
        $peage ->save();

        return response()->json([$peage, "message" =>"votre requête a bien été enregistré."]);
    }
}
