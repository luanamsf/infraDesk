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

## Inicialização rápida (local)
1. Instale dependências com `composer install` (PHP 8.2+).
2. Copie o ambiente: `cp .env.example .env`.
3. Para um teste rápido, use SQLite: defina `DB_CONNECTION=sqlite` no `.env` e crie o arquivo `touch database/database.sqlite`.
4. Gere a chave da aplicação: `php artisan key:generate`.
5. Rode migrações e seeders: `php artisan migrate --seed`.
6. Sirva a aplicação: `php artisan serve --host=0.0.0.0 --port=8000` e acesse `http://localhost:8000`.

O repositório já inclui a árvore `storage/` e `bootstrap/cache/` com os `.gitignore` necessários para evitar erros 500 por falta de diretórios em ambientes recém-clonados.

## Passo a passo detalhado no Windows
1. **Instale PHP 8.2+ e Composer**
   - Via [Chocolatey](https://chocolatey.org/): `choco install php composer -y` e reinicie o terminal para carregar o `PATH`.
   - Alternativa manual: baixe o pacote ZIP de PHP 8.2 para Windows, extraia para `C:\php` e adicione `C:\php` ao `PATH`; depois instale o Composer pelo instalador oficial.

2. **Clone o projeto e entre na pasta**
   ```powershell
   git clone https://seu-servidor/infraDesk.git
   cd infraDesk
   ```

3. **Instale as dependências PHP**
   ```powershell
   composer install
   ```

4. **Configure o ambiente**
   ```powershell
   copy .env.example .env
   ```
   - Para SQLite rápido, edite `.env` e defina `DB_CONNECTION=sqlite`.
   - Crie o arquivo de banco: `New-Item -ItemType File database\database.sqlite -Force`.

5. **Gere a chave da aplicação**
   ```powershell
   php artisan key:generate
   ```

6. **Crie tabelas e dados de demonstração**
   ```powershell
   php artisan migrate --seed
   ```

7. **Suba o servidor embutido**
   ```powershell
   php artisan serve --host=0.0.0.0 --port=8000
   ```
   Abra `http://localhost:8000` no navegador. Caso o firewall solicite permissão, permita para a rede local.

8. **Verifique permissões de escrita**
   - Se usar outro disco/pasta, confirme que o usuário atual pode escrever em `storage/` e `bootstrap/cache/`; se necessário, execute o terminal como Administrador.
