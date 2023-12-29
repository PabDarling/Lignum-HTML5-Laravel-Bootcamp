<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors'; // Nombre de la tabla de actores

    public function Peliculas()
    {
        return $this->hasMany(Pelicula::class, 'ActorPrincipalID');
    }
    use HasFactory;
}
