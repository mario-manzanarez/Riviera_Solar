<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                
                'nombre' => 'Mario Antonio',
                'apellido_m' => 'Manzanarez',
                'apellido_p' => 'Sánchez',
                'usuario' => 'mariololo',
                'telefono' => '7551111810',
                'nivel' => 0,
                'estado'=>1,
                'password' => Hash::make( '12345678'),
                'remember_token' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('users')->insert(
            [
                
                'nombre' => 'Manuel Oliver',
                'apellido_m' => 'Manzanarez',
                'apellido_p' => 'Sánchez',
                'usuario' => 'manolo',
                'telefono' =>'7555583506',
                'nivel' => 0,
                'estado'=>1,
                'password' => Hash::make( '12345678'),
                'remember_token' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
