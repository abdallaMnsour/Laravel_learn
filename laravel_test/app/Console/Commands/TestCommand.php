<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:{my_arg} {--my_option=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $this->argument('my_arg');
        $this->option('my_option');

        $this->ask('are you shure');

        $this->error('print error');
        $this->warn('print warning');
        $this->info('print status');
    }
}
