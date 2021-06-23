<?php

namespace Database\Seeders;

use App\Models\Articulo;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articulo::create([
            'nombreProducto' => 'Celular Pro',
            'descripcion' => 'Un celular muy pro',
            'precio' => 21000.56,
        ]);

        Articulo::create([
            'nombreProducto' => 'MotoG Pro',
            'descripcion' => 'Un motorola muy pro',
            'precio' => 50000.99,
        ]);

        Articulo::create([
            'nombreProducto' => 'Celular Generico',
            'descripcion' => 'Un celular generico si nada en especial',
            'precio' => 9199.99,
        ]);
    }
}
