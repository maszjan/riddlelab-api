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
    protected $description = 'Command for running fresh app migrations and seeders with users, assets, riddles and escape rooms';

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

        $this->info('Dodawanie domyślnych danych...');
        $this->call('db:seed', [
            '--force' => true
        ]);

        $this->info('Tworzenie linku symbolicznego do katalogu storage...');
        $this->call('storage:link');

        $this->info('Generowanie dokumentacji...');
        $this->call('scribe:generate');


        $this->info('Baza danych została pomyślnie przygotowana!');
        $this->info('Domyślni użytkownicy:');
        $this->table(
            ['Rola', 'Email', 'Hasło'],
            [
                ['Admin', 'admin@riddlelab.world', 'Password123@'],
                ['Moderator', 'mod@riddlelab.world', 'Password123@'],
                ['User', 'tester@riddlelab.world', 'Password123@']
            ]
        );

        $this->info('Utworzono również:');
        $this->line('- Zbiór zasobów (assets) do budowania pokoi');
        $this->line('- Zagadki (riddles) stworzone przez użytkowników');
        $this->line('- Pokoje escape (escape rooms) z umieszczonymi zasobami i zagadkami');
        $this->line('- 5 publicznych pokoi do podglądu');
    }
}
