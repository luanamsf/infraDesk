<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return Ticket::with(['team', 'workflowStage', 'skills'])->paginate(20);
    }

    public function store(Request $request)
    {
        $ticket = Ticket::create($request->validate([
            'title' => 'required|string|max:160',
            'description' => 'nullable|string',
            'priority' => 'required|string',
            'status' => 'required|string',
            'requester' => 'required|string|max:120',
            'team_id' => 'nullable|exists:teams,id',
            'workflow_stage_id' => 'nullable|exists:workflow_stages,id',
            'due_at' => 'nullable|date',
            'skills' => 'array',
            'skills.*' => 'integer|exists:skills,id',
        ]));

        $ticket->skills()->sync($request->input('skills', []));

        return response()->json($ticket->load(['team', 'workflowStage', 'skills']), 201);
    }
}
