<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrepareDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prepare:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for running fresh app migrations and seeders with users and assets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
