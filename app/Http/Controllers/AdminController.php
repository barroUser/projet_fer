<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateurs;

class AdminController extends Controller
{
    //
    public function create(Request $request){

        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
            'telephone' =>'required',
            'email' =>'required',
            'password' =>'required',
            'id_superadmin' =>'required',
            'id_peage ' =>'requinred'

        ]);

        $admin = new Administrateurs();
        $admin -> nom = $request -> input('nom');
        $admin -> prenom = $request ->input('prenom') ;
        $admin -> telephone = $request ->input('telephone') ;
        $admin -> email = $request ->input('email');
        $admin -> password = $request ->input('password') ;
        $admin -> id_superadmin = $request ->input('id_superadmin') ;
        $admin -> id_peage = $request ->input('id_peage') ;
        $admin ->save();

        return response()->json([$admin,"message" =>"votre requête a bien été enregistré."]);
    }
}
