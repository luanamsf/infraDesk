<?php

namespace Database\Seeders;

use App\Models\WorkflowStage;
use Illuminate\Database\Seeder;

class WorkflowSeeder extends Seeder
{
    public function run(): void
    {
        $stages = [
            ['name' => 'Novo', 'order' => 1, 'color' => '#0ea5e9'],
            ['name' => 'Triagem', 'order' => 2, 'color' => '#6366f1'],
            ['name' => 'Execução', 'order' => 3, 'color' => '#22c55e'],
            ['name' => 'Validação', 'order' => 4, 'color' => '#f59e0b'],
            ['name' => 'Fechado', 'order' => 5, 'color' => '#6b7280'],
        ];

        foreach ($stages as $stage) {
            WorkflowStage::firstOrCreate(['name' => $stage['name']], $stage);
        }
    }
}
