<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Ivan',
                'persons' => 2,
            ],
            [
                'name' => 'Fam. Dominguez Hernández',
                'persons' => '4'
            ],
            [
                'name' => 'Fam. Vazquez Moralez',
                'persons' => '3'
            ],
            [
                'name' => 'Fam. Ek López',
                'persons' => '3'
            ],
            [
                'name' => 'Fam. Lozano Díaz',
                'persons' => '4'
            ],
            [
                'name' => 'Fam. Castillo Hernández',
                'persons' => '4'
            ],
            [
                'name' => 'Fam. Gonzalez Marquez',
                'persons' => '3'
            ],
            [
                'name' => 'Fam. Cazarez Obregon',
                'persons' => '3'
            ],
            [
                'name' => 'Fam. Valdez Davalos',
                'persons' => '3'
            ],
            [
                'name' => 'Gonzalez y Sra.',
                'persons' => '2'
            ],
            [
                'name' => 'Fam. Aguilas Rios',
                'persons' => '2'
            ],
            [
                'name' => 'Fam. Malaga Garcia',
                'persons' => '4'
            ],
            [
                'name' => 'Fam. Herrera Santos',
                'persons' => '1'
            ],
            [
                'name' => 'Fam. Salazar Moralez',
                'persons' => '2'
            ],
            [
                'name' => 'Fam. Arriaga Perez',
                'persons' => '2'
            ],
            [
                'name' => 'Fam. Baez Rocha',
                'persons' => '2'
            ],
            [
                'name' => 'Fam. Baez Constantino',
                'persons' => '4'
            ],
            [
                'name' => 'Fam. Arriaga Arriaga',
                'persons' => '2'
            ],
            [
                'name' => 'Fam. Escalante Arriaga',
                'persons' => '2'
            ],
            [
                'name' => 'Fam. Vega Arriaga',
                'persons' => '7'
            ],
            [
                'name' => 'Fam. Gomez Arriaga',
                'persons' => '2'
            ],
            [
                'name' => 'Fam. Gomez Lopez',
                'persons' => '3'
            ],
            [
                'name' => 'Fam. Sanchez Lucio',
                'persons' => '5'
            ],
            [
                'name' => 'Fam. Montoya',
                'persons' => '3'
            ],
            [
                'name' => 'Gonzalo Ochoa',
                'persons' => '1'
            ],
            [
                'name' => 'Juan Carlos Gil',
                'persons' => '1'
            ],
            [
                'name' => 'Ma. Teresa Herrera Cantú',
                'persons' => '1'
            ],
            [
                'name' => 'Luz Maria Arvizu Martinez',
                'persons' => '1'
            ],
            [
                'name' => 'Mamá',
                'persons' => '2'
            ],
            [
                'name' => 'Papá',
                'persons' => '1'
            ],
            [
                'name' => 'Fito',
                'persons' => '1'
            ],
            [
                'name' => 'Tio Tomas',
                'persons' => '2'
            ],
            [
                'name' => 'Ingrid',
                'persons' => '3'
            ],
            [
                'name' => 'Juanita',
                'persons' => '3'
            ],
            [
                'name' => 'Tia Lili',
                'persons' => '2'
            ],
            [
                'name' => 'Tia Silvia',
                'persons' => '7'
            ],
            [
                'name' => 'Tia Aida',
                'persons' => '4'
            ],
            [
                'name' => 'Segio',
                'persons' => '2'
            ],
            [
                'name' => 'Tio Felipe',
                'persons' => '7'
            ],
            [
                'name' => 'Luisito',
                'persons' => '3'
            ],
            [
                'name' => 'Ale',
                'persons' => '5'
            ],
            [
                'name' => 'Isai Montoya',
                'persons' => '2'
            ],
            [
                'name' => 'Tia Rosalva',
                'persons' => '2'
            ],
            [
                'name' => 'Bocho',
                'persons' => '2'
            ]
        ];

        foreach ($users as $key => $user) {
            # code...
            $token = Str::random(30);
            $validToken = true;
    
            while (!$validToken) {
                $user = DB::table('users')
                ->where('token', $token)
                ->first();
    
                if($user){
                    $token = Str::random(30);
                }else{
                    $validToken = false;
                }
            }

            DB::table('users')->insert([
                'name' => $user['name'], 
                'persons' => $user['persons'],
                'token' => $token,
                'status' => 2,
                'created_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey')) , 
                'updated_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey'))
            ]);
        }


        DB::table('status_catalog')->insert([
            ['name' => 'Confirmado'],
            ['name' => 'Espera']
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
