<!-- .github/copilot-instructions.md for proyecto-clase -->
# Copilot / AI agent instructions — proyecto-clase

This repository is a small Laravel-style PHP application (Laravel skeleton). The file layout, composer scripts, and test config are the canonical sources for how to build, run and test the app — follow them exactly.

Quick facts
- PHP: ^8.2 (see `composer.json`)
- Framework: Laravel (skeleton)
- Frontend: Vite + Tailwind (see `package.json`)

What to do first (developer commands)
- Install PHP dependencies and project bootstrap:
```powershell
composer install; php -r "file_exists('.env') || copy('.env.example', '.env');"; php artisan key:generate
```
- Run full setup (composer.json script `setup`):
```powershell
composer run-script setup
```
- Run dev environment (starts server, queue worker, logs and vite):
```powershell
composer run-script dev
```
- Run tests:
```powershell
composer run-script test
# or
php artisan test
```

Testing and CI notes
- `phpunit.xml` sets DB to an in-memory SQLite instance for tests (DB_CONNECTION=sqlite, DB_DATABASE=:memory:). Tests expect queue and session drivers to be sync/array. Use `composer run-script test` or `php artisan test`.

Repository conventions & patterns (project-specific)
- Routes: see `routes/web.php`. Product routes are grouped with a controller prefix:
  - `Route::prefix('product')->controller(ProductController::class)->group(...)` — handlers map to `index`, `create`, `show`.
- Controllers: simple controllers return views from `resources/views`. Example: `app/Http/Controllers/ProductController.php` returns `view('product.index')`, `view('product.create')`, `view('product.show')`.
- Views: look under `resources/views/product/` for product-related pages.
- Models: follow PSR-4 autoloading (`App\\` → `app/`). Example: `app/Models/User.php` uses `HasFactory` and `Notifiable`. Note the project uses typed methods and modern PHP signatures (see `casts()` in `User` instead of a public `$casts` property).
- Migrations & seeding: migrations live in `database/migrations` and seeders in `database/seeders`.

Build & assets
- Frontend tooling is Vite. Use `npm run dev` or `npm run build`. The composer `setup` script calls `npm install` and `npm run build`.

Project-specific gotchas for AI code edits
- Keep view names consistent: controller methods return views under `resources/views/product/*`. If you add a route, ensure a corresponding Blade view exists.
- Routes use controller groups with method names as strings (not closures). When adding a new controller action, register it in the group in `routes/web.php`.
- Tests expect in-memory SQLite — do not change DB environment in phpunit.xml unless you also update tests.
- The `composer.json` `dev` script uses `npx concurrently` to start multiple processes; commands in that script run together in dev workflows.

Files to reference when making changes
- `composer.json` — project scripts and PHP requirement
- `package.json` — Vite and npm scripts
- `phpunit.xml` — testing environment
- `routes/web.php` — route definitions
- `app/Http/Controllers/ProductController.php` — example controller returning views
- `app/Models/User.php` — example model patterns (HasFactory, casts)
- `resources/views/product/*` — product views

If something is ambiguous
- Prefer following existing patterns (controller group routes → view names → resources/views layout). Ask maintainers only for decisions that cannot be inferred (business logic, API keys, external services).

Thank you — request feedback from the repo owner if any of the structural assumptions above are incorrect or if you need access to credentials/environments not present in the repository.
