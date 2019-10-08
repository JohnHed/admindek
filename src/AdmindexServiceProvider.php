<?php

namespace Dashboards\Admindex;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Dashboards\Admindex\Console\AdmindexMakeCommand;
use Dashboards\Admindex\Http\ViewComposers\AdmindexComposer;
use Dashboards\Admindex\Helpers\Admindex;

class AdmindexServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot( Factory $view, Dispatcher $events, Repository $config)
    {
        $this->loadViews();

        $this->loadTranslations();

        $this->publishConfig();

        $this->publishAssets();

        $this->publishHelpers();

        $this->publishController();

        $this->registerCommands();

        $this->registerViewComposers($view);
    }

    private function loadViews()
    {
        $viewsPath = $this->packagePath('resources/views');

        $this->loadViewsFrom($viewsPath, 'admindex');

        $this->publishes([
            $viewsPath => base_path('resources/views/vendor/admindex'),
        ], 'views');
    }

    private function loadTranslations()
    {
        $translationsPath = $this->packagePath('resources/lang');

        $this->loadTranslationsFrom($translationsPath, 'admindex');

        $this->publishes([
            $translationsPath => base_path('resources/lang/vendor/admindex'),
        ], 'translations');
    }

    private function publishConfig()
    {
        $configPath = $this->packagePath('config/admindex.php');

        $this->publishes([
            $configPath => config_path('admindex.php'),
        ], 'config');

        $this->mergeConfigFrom($configPath, 'admindex');
    }

    private function publishHelpers()
    {
        $configPath = $this->packagePath('src/Helpers');

        $this->publishes([
            $configPath => base_path('app/Helpers'),
        ], 'helpers');
    }
    private function publishController()
    {
        $configPath = $this->packagePath('src/Http/Controllers');

        $this->publishes([
            $configPath => base_path('app/Http/Controllers'),
        ], 'controllers');
    }

    private function publishAssets()
    {
        $this->publishes([
            $this->packagePath('resources/assets/admindex') => public_path('vendor/admindex'),
        ], 'assets');
        $this->publishes([
            $this->packagePath('resources/assets') => public_path('/'),
        ], 'assets');
    }

    private function packagePath($path)
    {
        return __DIR__ . "/../$path";
    }

    private function registerCommands()
    {
        $this->commands(AdmindexMakeCommand::class);
    }

    private function registerViewComposers(Factory $view)
    {
        $view->composer('admindex::page', AdmindexComposer::class);
    }
}
