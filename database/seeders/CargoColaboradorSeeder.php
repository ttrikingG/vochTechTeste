<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CargoColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pt_BR');

        $cargos = DB::table('cargos')->pluck('id')->toArray();
        
        $colaboradores = DB::table('colaboradores')->pluck('id')->toArray();
        for ($i = 0; $i < 100; $i++) {
            DB::table('cargo_colaborador')->insert([
                'cargo_id' => $faker->randomElement($cargos),
                'colaborador_id' => $faker->randomElement($colaboradores),
                'nota_desempenho' => $faker->randomFloat(2, 0, 10),
            ]);
        }
    }
}
