<!DOCTYPE html>
<html lang="pt-BR" class="h-full bg-slate-950">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.9/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-full font-[Inter] text-slate-100">
    <div class="min-h-full">
        <header class="border-b border-slate-800 bg-slate-900/70 backdrop-blur">
            <div class="mx-auto max-w-6xl px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-cyan-500 text-slate-950 font-semibold">ID</span>
                    <div>
                        <p class="text-sm uppercase tracking-[0.2em] text-cyan-400">Plataforma TI</p>
                        <h1 class="text-xl font-semibold">{{ config('app.name') }}</h1>
                    </div>
                </div>
                <nav class="flex items-center gap-6 text-sm text-slate-300">
                    <a href="#" class="hover:text-white">Painel</a>
                    <a href="#" class="hover:text-white">Fluxos</a>
                    <a href="#" class="hover:text-white">Capacidades</a>
                    <a href="#" class="hover:text-white">Governança</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-6 py-10 space-y-10">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
