<?php

namespace Database\Seeders;

use App\Models\Models\Clients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('pt_BR');

        for ($i=0; $i<50; $i++) {
            Clients::create(
                [
                    'name' => $faker->name,
                    'document' => preg_replace("/[^0-9]/", "", $faker->cpf),
                    'date_birth' => $faker->date(),
                    'genre' => $faker->randomElement(['F','M']),
                    'address' => $faker->address,
                    'states' => $faker->stateAbbr,
                    'city' => $faker->city
                ]
            );
        }

    }
}
