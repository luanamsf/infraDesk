# InfraDesk

Plataforma corporativa de atendimento e orquestração de demandas de TI construída sobre **Laravel 11**, focada em fluxo operacional eficiente, governança robusta e distribuição inteligente de trabalho.

## Visão geral
- Centralização de chamados e priorização automática.
- Orquestração por estágio com SLAs visuais.
- Direcionamento por competências da equipe e disponibilidade.
- Dashboards executivos para decisões orientadas a dados.

## Estrutura
- **app/**: modelos de domínio (Tickets, Equipes, Competências, Fluxos) e controllers.
- **database/**: migrações e seeders com dados iniciais para testes rápidos.
- **resources/views/**: layout clean em Tailwind e painel principal.
- **routes/**: rotas web e API para tickets.

Clone o repositório, configure o `.env`, execute as migrações e seeders para popular dados e acesse o dashboard principal em `/`.
