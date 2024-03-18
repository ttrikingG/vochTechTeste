<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ColaboradoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pt_BR');

        $unidades = DB::table('unidades')->pluck('id')->toArray();
        
        for ($i = 0; $i < 100; $i++) {
            DB::table('colaboradores')->insert([
                'unidade_id' => $faker->randomElement($unidades),
                'nome' => $faker->name,
                'cpf' => $faker->cpf,
                'email' => $faker->unique()->safeEmail,
            ]);
        }
    }
}
