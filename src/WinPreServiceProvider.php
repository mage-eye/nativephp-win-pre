<?php

declare(strict_types=1);

namespace JCombee\Native\WinPre;

use Illuminate\Support\ServiceProvider;

class WinPreServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PresetCollection::class);
        $this->app->singleton(PresetManager::class);
        $this->app->singleton(WinPreManager::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../routes/window.php' => base_path('routes/window.php'),
        ]);
    }
}
