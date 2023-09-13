<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'valeur',
        'est_actif',
        'est_valide',
        'id_agent',
        'id_peage_depart',
        'id_peage_arrivee',
        'id_trajet',
        'date_creation',
        'date_activation',
        'date_validation',
        
    ];
}
