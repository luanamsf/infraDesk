<div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5 shadow-lg shadow-slate-900/40">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-sm text-slate-400">{{ $title }}</p>
            <p class="mt-2 text-3xl font-semibold text-white">{{ $value }}</p>
        </div>
        <div class="h-10 w-10 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center">
            {{ $icon ?? '' }}
        </div>
    </div>
</div>
