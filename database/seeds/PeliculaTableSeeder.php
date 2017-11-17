<?php

use Illuminate\Database\Seeder;

class PeliculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peliculas')->insert([

        	'titulo' => 'Titanic',
        	'director' => 'Matias',
        	'descripcion' => 'Pelicula preferida del mati',
        	'precio' => '500',
        ]);
    }
}
