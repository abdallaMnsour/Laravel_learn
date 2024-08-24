<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:file {file_name} {--type=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create route file by default';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = $this->argument('file_name');
        $type_file  = ($this->option('type') ?: false);

        if ($type_file === false) {

            copy('stubs/route.stub', 'routes/' . $filename . '.php');

            $this->info('this file created successfully') ;
        } else {

            

            $this->info($type_file);
        }
    }
    
}
