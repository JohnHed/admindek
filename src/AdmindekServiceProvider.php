<?php

namespace Dashboards\Admindek;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Dashboards\Admindek\Console\AdmindekMakeCommand;
use Dashboards\Admindek\Http\ViewComposers\AdmindekComposer;
use Dashboards\Admindek\Helpers\Admindek;

class AdmindekServiceProvider extends BaseServiceProvider
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

        $this->loadViewsFrom($viewsPath, 'admindek');

        $this->publishes([
            $viewsPath => base_path('resources/views/vendor/admindek'),
        ], 'views');
    }

    private function loadTranslations()
    {
        $translationsPath = $this->packagePath('resources/lang');

        $this->loadTranslationsFrom($translationsPath, 'admindek');

        $this->publishes([
            $translationsPath => base_path('resources/lang'),
        ], 'translations');
    }

    private function publishConfig()
    {
        $configPath = $this->packagePath('config/admindek.php');

        $this->publishes([
            $configPath => config_path('admindek.php'),
        ], 'config');

        $this->mergeConfigFrom($configPath, 'admindek');
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
            $this->packagePath('resources/admindek') => public_path('vendor/admindek'),
        ], 'assets');
        $this->publishes([
            $this->packagePath('resources/assets/') => public_path('/'),
        ], 'assets');
    }

    private function packagePath($path)
    {
        return __DIR__ . "/../$path";
    }

    private function registerCommands()
    {
        $this->commands(AdmindekMakeCommand::class);
    }

    private function registerViewComposers(Factory $view)
    {
        $view->composer('admindek::page', AdmindekComposer::class);
    }
}
