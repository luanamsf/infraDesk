<x-layouts.app>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <x-components.stat-card title="Chamados ativos" :value="$kpi['ativos']" />
        <x-components.stat-card title="Alta criticidade" :value="$kpi['criticos']" />
        <x-components.stat-card title="SLA em risco" :value="$kpi['sla']" />
    </div>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <section class="lg:col-span-2 rounded-2xl border border-slate-800 bg-slate-900/70 p-6 shadow-lg shadow-slate-900/40">
            <header class="flex items-center justify-between">
                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-cyan-400">Últimas entradas</p>
                    <h2 class="text-xl font-semibold">Chamados centralizados</h2>
                </div>
                <button class="rounded-full bg-cyan-500 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-cyan-400">Novo chamado</button>
            </header>
            <ul class="mt-6 space-y-4">
                @foreach($tickets as $ticket)
                <li class="rounded-xl border border-slate-800 bg-slate-950/40 p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-400">{{ $ticket->requester }}</p>
                            <p class="text-lg font-semibold text-white">{{ $ticket->title }}</p>
                        </div>
                        <span class="rounded-full bg-slate-800 px-3 py-1 text-xs uppercase tracking-wide text-cyan-300">{{ $ticket->priority }}</span>
                    </div>
                    <div class="mt-3 flex flex-wrap items-center gap-3 text-xs text-slate-400">
                        <span class="rounded-md bg-slate-800 px-2 py-1">{{ $ticket->team->name ?? 'Equipe a definir' }}</span>
                        <span class="rounded-md bg-slate-800 px-2 py-1">{{ $ticket->workflowStage->name ?? 'Fluxo' }}</span>
                        @if($ticket->due_at)
                            <span class="rounded-md bg-amber-500/20 px-2 py-1 text-amber-300">Vencimento {{ $ticket->due_at->diffForHumans() }}</span>
                        @endif
                    </div>
                </li>
                @endforeach
            </ul>
        </section>

        <section class="rounded-2xl border border-slate-800 bg-slate-900/70 p-6 shadow-lg shadow-slate-900/40">
            <header class="flex items-center justify-between">
                <div>
                    <p class="text-sm uppercase tracking-[0.2em] text-cyan-400">Fluxo operacional</p>
                    <h2 class="text-xl font-semibold">Orquestração por estágio</h2>
                </div>
                <button class="rounded-full border border-slate-800 px-3 py-1 text-xs text-slate-300 hover:border-cyan-500 hover:text-white">Governança</button>
            </header>
            <div class="mt-6 space-y-4">
                @foreach($stages as $stage)
                <div class="flex items-center justify-between rounded-xl border border-slate-800 bg-slate-950/30 p-4">
                    <div class="flex items-center gap-3">
                        <span class="h-3 w-3 rounded-full" style="background: {{ $stage->color }}"></span>
                        <div>
                            <p class="text-sm font-semibold text-white">{{ $stage->name }}</p>
                            <p class="text-xs text-slate-400">Ordem {{ $stage->order }} • SLA {{ $stage->sla_minutes }} min</p>
                        </div>
                    </div>
                    <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-cyan-300">{{ $stage->tickets_count }} em fila</span>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</x-layouts.app>
