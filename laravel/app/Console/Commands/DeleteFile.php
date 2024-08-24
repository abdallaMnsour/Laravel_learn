<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use function PHPUnit\Framework\fileExists;

class DeleteFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:file {filename} --type=';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete route file by default';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = $this->argument('filename');

        if (is_file('routes/' . $filename . '.php')) {

            $bool = $this->ask('are you shore you want to delete this file [ ' . $filename . '.php ]', 'no');

            if ($bool == 'yes') {
                unlink('routes/' . $filename . '.php');
                $this->info('file deleted successfully');
            }
        } else {
            $this->error('the file [ ' . $filename . '.php ] dose not exist');
        }
    }
}
