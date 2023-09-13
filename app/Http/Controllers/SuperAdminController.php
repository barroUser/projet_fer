<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperAdmins;


class SuperAdminController extends Controller
{
    //
    public function create(Request $request){

        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
            'telephone' =>'required',
            'email' =>'required',
            'password' =>'required'

        ]);

        $adminsuper = new SuperAdmins();
        $adminsuper -> nom = $request -> input('nom');
        $adminsuper -> prenom = $request ->input('prenom') ;
        $adminsuper -> telephone = $request ->input('telephone') ;
        $adminsuper -> email = $request ->input('email');
        $adminsuper -> password = $request ->input('password') ;
        $adminsuper ->save();

        return response()->json($adminsuper);
    }
}
