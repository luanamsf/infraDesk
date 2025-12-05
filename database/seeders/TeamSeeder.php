<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        Team::create([
            'name' => 'NOC',
            'segment' => '24x7',
            'service_hours' => '00:00 - 23:59'
        ])->skills()->sync([1, 3]);

        Team::create([
            'name' => 'Sustentação Aplicações',
            'segment' => 'Negócios',
            'service_hours' => '08:00 - 18:00'
        ])->skills()->sync([2, 4]);
    }
}
