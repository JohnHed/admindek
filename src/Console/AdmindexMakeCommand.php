<?php

namespace Dashboards\Admindex\Console;

use Illuminate\Auth\Console\AuthMakeCommand;

class AdmindexMakeCommand extends AuthMakeCommand
{
    protected $signature = 'make:admindex {--views : Only scaffold the authentication views}{--force : Overwrite existing views by default}';

    protected $description = 'Scaffold basic Admindex login and registration views and routes';

    protected $irisViews = [
        'auth/login.stub'           => 'auth/login.blade.php',
        'auth/register.stub'        => 'auth/register.blade.php',
        'auth/passwords/email.stub' => 'auth/passwords/email.blade.php',
        'auth/passwords/reset.stub' => 'auth/passwords/reset.blade.php',
        'home.stub'                 => 'home.blade.php',
    ];

    protected function exportViews()
    {
        parent::exportViews();

        foreach ($this->irisViews as $key => $value) {
            copy(
                __DIR__ . '/stubs/make/views/' . $key,
                base_path('resources/views/' . $value)
            );
        }
    }
}
