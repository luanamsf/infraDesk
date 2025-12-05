<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        $skills = Skill::pluck('id')->all();

        for ($i = 1; $i <= 8; $i++) {
            $ticket = Ticket::create([
                'title' => 'Demanda #' . $i,
                'description' => 'Ticket de exemplo para fluxos críticos e operacionais.',
                'priority' => $i % 3 === 0 ? 'Alta' : 'Normal',
                'status' => $i % 2 === 0 ? 'andamento' : 'triagem',
                'requester' => 'usuario'. $i .'@empresa.test',
                'team_id' => $i % 2 + 1,
                'workflow_stage_id' => $i % 5 + 1,
            ]);

            if (! empty($skills)) {
                $ticket->skills()->sync(array_slice($skills, 0, rand(1, count($skills))));
            }
        }
    }
}
