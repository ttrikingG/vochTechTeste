<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pt_BR');
        
        for ($i = 0; $i < 100; $i++) {
            DB::table('unidades')->insert([
                'nome_fantasia' => $faker->company,
                'razao_social' => $faker->company,
                'cnpj' => $faker->cnpj,
            ]);
        }
    }
}
