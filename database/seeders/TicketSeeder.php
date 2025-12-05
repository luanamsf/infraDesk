<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 8; $i++) {
            Ticket::create([
                'title' => 'Demanda #' . $i,
                'description' => 'Ticket de exemplo para fluxos críticos e operacionais.',
                'priority' => $i % 3 === 0 ? 'Alta' : 'Normal',
                'status' => $i % 2 === 0 ? 'andamento' : 'triagem',
                'requester' => 'usuario'. $i .'@empresa.test',
                'team_id' => $i % 2 + 1,
                'workflow_stage_id' => $i % 5 + 1,
            ]);
        }
    }
}
