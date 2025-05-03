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
        $this->info('Przygotowywanie bazy danych dla RiddleLab...');

        $this->info('Uruchamianie migracji...');
        $this->call('migrate:fresh', [
            '--force' => true
        ]);

        $this->info('Dodawanie domyślnych użytkowników i zasobów...');
        $this->call('db:seed', [
            '--class' => 'Database\Seeders\UserSeeder',
            '--force' => true
        ]);
        $this->call('db:seed', [
            '--class' => 'Database\Seeders\AssetSeeder',
            '--force' => true
        ]);

        $this->info('Tworzenie linku symbolicznego do katalogu storage...');
        $this->call('storage:link');

        $this->info('Baza danych została pomyślnie przygotowana!');
        $this->info('Domyślni użytkownicy:');
        $this->table(
            ['Rola', 'Email', 'Hasło'],
            [
                ['Admin', 'admin@riddlelab.app', 'Password123@'],
                ['Moderator', 'mod@riddlelab.app', 'Password123@'],
                ['User', 'tester@riddlelab.app', 'Password123@']
            ]
        );
    }

}
