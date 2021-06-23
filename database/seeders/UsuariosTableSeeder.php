<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::create([
            'name' => 'leandro-grg',
            'email' => 'leandro.ggomez@davinci.edu.ar',
            'password' => Hash::make('admin910'),
        ]);

    }
}
