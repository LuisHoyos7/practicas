<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{

    public function run(){

        $user = \App\User::create([
            'identificacion' => '1065010010',
            'first_name' => 'unicor',
            'last_name' => 'unicor',
            'telefono' => '3007027002',
            'direccion' => 'Monteria Cordoba',
            'email' => 'admin@unicor.com',
            'password' => bcrypt('admin')
        ]);

        $user->attachRole('administrador');

    }
}
