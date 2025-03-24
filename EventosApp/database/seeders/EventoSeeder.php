<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use Faker\Factory as Faker;

class EventoSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 150; $i++) {
            Evento::create([
                'nombreEvento' => $faker->sentence(3),
                'fechaInicio' => $faker->date(),
                'fechaFin' => $faker->date(),
                'tipo' => $faker->randomElement(['reunión', 'conferencia', 'taller', 'presentación', 'concierto']),
                'participantes' => $faker->numberBetween(1, 15),
                'descripcion' => $faker->paragraph(),
            ]);
        }
    }
}
