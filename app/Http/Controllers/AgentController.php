<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agents;


class AgentController extends Controller
{
    //
    public function create(Request $request){

        $request->validate([
            'nom' =>'required',
            'prenom' =>'required',
            'telephone' =>'required',
            'email' =>'required',
            'password' =>'required',
            'id_admin' =>'required',
            'id_lot' =>'required'
            

        ]);

        $agent = new Agents();
        $agent -> nom = $request -> input('nom');
        $agent -> prenom = $request ->input('prenom');
        $agent -> telephone = $request ->input('telephone');
        $agent -> email = $request ->input('email');
        $agent -> password = $request ->input('password');
        $agent -> id_admin = $request ->input('id_admin');
        $agent -> id_lot = $request ->input('id_lot');
        $agent ->save();

        return response()->json($agent);
    }
}
