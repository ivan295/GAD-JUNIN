<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('tipo_usuario')->insert([
            'tipo_usuario'=>'admin',
        ]);

        DB::table('users')->insert([
        	'nombre'=>'admin',
        	'apellido'=>'admin',
        	'email'=>'admin@sistema.com',
        	'password'=>bcrypt('12345678'),
            'idtipoUsuario'=>'1',
        ]);
    }
}
