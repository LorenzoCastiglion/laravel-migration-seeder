<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newtrains = new Train();
            $newtrains->azienda = $faker->name();
            $newtrains->stazione_partenza = $faker->city();
            $newtrains->stazione_arrivo = $faker->city();
            $newtrains->orario_partenza = $faker->time();
            $newtrains->orario_arrivo = $faker->time();
            $newtrains->codice_treno = $faker->bothify();
            $newtrains->numero_carrozze = $faker->randomDigit();
            $newtrains->in_orario = $faker->boolean();
            $newtrains->cancellato = $faker->boolean();
            $newtrains->save();
        }
    }
}
