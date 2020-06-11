<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert(
            [
            [
                'nombre' => 'Playstation 4 Slim 1TB Mega Pack',
                'precio' => 10599.00,
                'unidades' => 10,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Playstation 4 Pro 1TB ',
                'precio' => 12599.00,
                'unidades' => 10,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'nombre' => 'Playstation 4 Slim 1TB HITS',
                'precio' => 8599.00,
                'unidades' => 10,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
                [
                    'nombre' => 'Consola Xbox One S 1TB  Bundle Edition',
                    'precio' => 7599.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'Consola Xbox One S 1TB All Digital ',
                    'precio' => 7599.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'Consola Xbox One X, 1TB + The Division 2',
                    'precio' => 10399.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'Tarjeta Xbox Live $1,000 MXN ',
                    'precio' => 1000.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'The Last of Us Part II Standard Edition',
                    'precio' => 1749.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'Nintendo Switch Neon 32GB',
                    'precio' => 8999.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'Marvel\'s Spider-Man - PlayStation 4',
                    'precio' => 599.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'Super Mario Odyssey - Standard Edition',
                    'precio' => 1129.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'Mario Kart 8 Deluxe - Standard Edition',
                    'precio' => 1400.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'Control Inalámbrico Xbox One ',
                    'precio' => 1700.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'FIFA 20 - Standard Edition - Xbox One',
                    'precio' => 1000.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ],
                [
                    'nombre' => 'FIFA 20 - Standard Edition - PS4',
                    'precio' => 1199.00,
                    'unidades' => 10,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]



            ]

        );


    }
}
