<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateurs extends Model
{
    use HasFactory;

    protected $table = 'admins';
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
        'id_superadmin',
        'id_peage',
    ];
}
