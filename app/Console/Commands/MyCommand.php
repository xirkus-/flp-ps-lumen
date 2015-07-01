<?php namespace Flpps\Console\Commands;

use Illuminate\Console\Command;

class MyCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'my:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run my command.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info('it works!');
    }

}