<?php

namespace Dashboards\Admindek\Console;

//use Illuminate\Auth\Console\AuthMakeCommand;

//class AdmindekMakeCommand extends AuthMakeCommand
use Illuminate\Console\Command;

class AdmindekMakeCommand extends Command
{
    protected $signature = 'make:admindek {--views : Only scaffold the authentication views}{--force : Overwrite existing views by default}';

    protected $description = 'Scaffold basic Admindek login and registration views and routes';

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

    public function handle()
    {
        $this->exportViews();

        $this->info('Scaffold successfully.');
    }
}
