<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearApplication extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to performe Cache, Config, Route and View clear';

    protected $commands = ['cache', 'config', 'route', 'view'];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('----- // Starting \\\\ -----');

        foreach ($this->commands as $command) {
            $this->line('');
            $this->warn("Clearing {$command}");
            $this->call($command . ':clear');
        }

        $this->line('');
        $this->info('----- // Finished! \\\\ -----');
    }
}
