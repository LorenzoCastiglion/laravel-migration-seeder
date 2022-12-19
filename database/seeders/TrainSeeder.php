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
        for($i = 0; $i < 30; $i++) {
            $newtrains = new Train();
            $newtrains->azienda = $faker->company();
            $newtrains->stazione_di_partenza = $faker->city();
            $newtrains->stazione_di_arrivo = $faker->city();
            $newtrains->ora_di_arrivo = $faker->time();
            $newtrains->ora_di_partenza = $faker->time();
            $newtrains->codice_treno = $faker->bothify();
            $newtrains->n_carrozza = $faker->randomDigit();
            $newtrains->in_orario = $faker->boolean();
            $newtrains->cancellato = $faker->boolean();
            $newtrains->data_partenza = $faker->dateTimeBetween('-1 week',  'now');
            $newtrains->save();
        }
    }
}
