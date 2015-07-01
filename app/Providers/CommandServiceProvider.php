<?php namespace Flpps\Providers;

use Illuminate\Support\ServiceProvider;
use Flpps\Console\Commands\MyCommand;

class CommandServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.my.command', function()
        {
            return new MyCommand;
        });

        $this->commands(
            'command.my.command'
        );
    }
}