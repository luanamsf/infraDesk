<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            ['name' => 'Redes', 'category' => 'Infraestrutura'],
            ['name' => 'Banco de Dados', 'category' => 'Dados'],
            ['name' => 'DevOps', 'category' => 'Plataforma'],
            ['name' => 'Segurança', 'category' => 'Cyber'],
        ];

        foreach ($skills as $skill) {
            Skill::firstOrCreate($skill);
        }
    }
}
