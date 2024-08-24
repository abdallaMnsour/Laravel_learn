<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FirstCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:file {--type=} {name?}';

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

        $file_name = $this->argument('name');
        $file_type = $this->option('type');

        if (empty($file_name)) {
            $file_name = $this->ask('type file name');
        }
        if (empty($file_type) || $file_type == 'blade') {
            if (touch('resources/views/' . $file_name . '.blade.php')) {
                $this->info('the file has created successfully');
            } else {
                $this->error('the file has failed');
            }
        } else if ($file_type == 'route') {
            if (touch('routes/' . $file_name . '.php')) {
                $this->info('the file has created successfully');
            } else {
                $this->error('the file has failed');
            }
        } else {
            $this->error('the type does not found');
        }
    }
}
