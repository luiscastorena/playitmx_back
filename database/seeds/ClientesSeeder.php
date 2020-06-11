<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],            [
                'nombre' => Str::random(50),
                'apellidos'  => Str::random(50),
                'correo' => Str::random(10).'@gmail.com',
                'telefono' => '4491666693',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],

        ]);
    }
}
