<?php

declare(strict_types=1);

namespace Green\Posts\Providers;

use Green\Posts\Console\Commands\PostCommand;
use Illuminate\Support\ServiceProvider;

class PostsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/posts.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'posts');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/posts'),
        ]);
        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ]);
        $this->publishes([
            __DIR__.'/../config/posts.php' => config_path('posts.php'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->commands([
                PostCommand::class,
            ]);
        }
    }
}