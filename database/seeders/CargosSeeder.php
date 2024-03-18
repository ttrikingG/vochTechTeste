<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pt_BR');

        $existingCargos = DB::table('cargos')->pluck('cargo')->toArray();
        
        for ($i = 0; $i < 10; $i++) {
            $cargo = $faker->jobTitle;
            while (in_array($cargo, $existingCargos)) {
                $cargo = $faker->jobTitle;
            }
            DB::table('cargos')->insert([
                'cargo' => $cargo,
            ]);
            $existingCargos[] = $cargo;
        }
    }
}
