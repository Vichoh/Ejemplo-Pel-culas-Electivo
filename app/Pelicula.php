<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';

    protected $primaryKey = 'id';

    protected $fillable = ['titulo', 'descripcion', 'precio', 'director'];

    public $timestamps = false;
}
