<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom_vehicule',
        'prix_vehicule',
        'marque_vehicule',
        'couleur_vehicule',
        'nombre_version',
        'image_vehicule',
        'nom_utilisateur',
    ];

}
