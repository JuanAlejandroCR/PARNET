<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class FieldSeeder extends Seeder
{
    public function run(): void
    {
        $fields = [
            'Certificaciones',
            'Telecomunicaciones',
            'Redes Eléctricas',
            'Circuito Cerrado TV',
            'Corriente Regulada',
            'Data Centers',
            'Fibra Óptica',
            'Cable Estructurado',
            'Pólizas',
            'Outsourcing',
        ];

        foreach($fields as $field) {
            Field::create([
                'field' => $field,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
