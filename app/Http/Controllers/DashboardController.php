<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\WorkflowStage;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $tickets = Ticket::with(['team', 'workflowStage'])->latest()->take(6)->get();
        $stages = WorkflowStage::withCount('tickets')->orderBy('order')->get();

        return view('dashboard.index', [
            'tickets' => $tickets,
            'stages' => $stages,
            'kpi' => [
                'ativos' => Ticket::where('status', '!=', 'fechado')->count(),
                'criticos' => Ticket::where('priority', 'Alta')->count(),
                'sla' => Ticket::whereNotNull('due_at')->where('due_at', '<', now())->count(),
            ],
        ]);
    }
}
