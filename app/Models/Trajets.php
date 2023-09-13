<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajets extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'ville_depart',
        'ville_arrivee',
        'distance',
    ];
    
}
