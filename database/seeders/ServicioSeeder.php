<?php

namespace Database\Seeders;

use App\Models\Servicios;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 10; $i++) {
            Servicios::create([
                'field_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                'service' => "Servicio {$i}",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
