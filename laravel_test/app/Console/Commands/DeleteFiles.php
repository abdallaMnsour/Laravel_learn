<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:file {--type=} {name?}';

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
        $name_file = $this->argument('name');
        $type_file = $this->option('type');

        if (empty($name_file)) {
            $name_file = $this->ask('what is name the file');
        }

        # before delete check if the --type is exist default 'blade'

        if (empty($type_file) || $type_file == 'blade') {
            /**
             * remove the file from views
             * unlink @return bool
             */
            if (unlink('resources/views/' . $name_file . '.blade.php')) {

                $this->info('the file has deleted successfully');
            } else {

                $this->error('failed: check the file is exist');
            }
        } else if ($type_file == 'route') {
            /**
             * remove the file from routes
             * unlink @return bool
             */
            if (unlink('routes/' . $name_file . '.php')) {

                $this->info('the file has deleted successfully');
            } else {

                $this->error('failed: check the file is exist');
            }
        } else {

            $this->error('the type does not found');
        }
    }
}
