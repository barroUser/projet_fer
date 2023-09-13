<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupons;

class CouponController extends Controller
{
    //
    public function create(Request $request){

        $request->validate([
            'code' =>'required',
            'valeur' =>'required',
            'est_actif' =>'required',
            'est_valide' =>'required',
            'id_agent' =>'required',
            'id_peage_depart' =>'required',
            'id_peage_arrivee' =>'required',
            'id_trajet' =>'required',
            'date_creation' =>'required',
            'date_activation' =>'required',
            'date_validation' =>'required',
            
        ]);

        $coupon = new Coupons();
        $coupon -> code = $request -> input('code');
        $coupon -> valeur = $request ->input('valeur');
        $coupon -> est_actif = $request ->input('est_actif');
        $coupon -> est_valide = $request ->input('est_valide');
        $coupon -> id_agent = $request ->input('id_agent');
        $coupon -> id_peage_depart = $request ->input('id_peage_depart');
        $coupon -> id_peage_arrivee = $request ->input('id_peage_arrivee');
        $coupon -> id_trajet = $request ->input('id_trajet');
        $coupon -> date_creation = $request ->input('date_creation');
        $coupon -> date_activation = $request ->input('date_activation');
        $coupon -> date_validation = $request ->input('date_validation');
        $coupon ->save();

        return response()->json($coupon);
    }
}
