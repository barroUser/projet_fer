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

        $etudiant = new Administrateurs();
        $etudiant -> nom = $request -> input('nom');
        $etudiant -> prenom = $request ->input('prenom') ;
        $etudiant -> telephone = $request ->input('telephone') ;
        $etudiant -> email = $request ->input('email');
        $etudiant -> password = $request ->input('password') ;
        $etudiant -> id_superadmin = $request ->input('id_superadmin') ;
        $etudiant -> id_peage = $request ->input('id_peage') ;
        $etudiant ->save();

        return response()->json($etudiant);
    }
}
