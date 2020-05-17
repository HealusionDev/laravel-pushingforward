<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup Database';

    /**
     *
     * @var string
     */
    protected $process;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        if (!is_dir(storage_path('app/backups'))) mkdir(storage_path('app/backups'));

        $this->process = new Process(array(sprintf(
            'PGPASSWORD="%s" pg_dump -U %s -DB %s >> %s',
            config('database.connections.pgsql.password'),
            config('database.connections.pgsql.username'),
            config('database.connections.pgsql.database'),
            storage_path(sprintf('app\backups\backup_%s.sql', now()->format('Ymd')))
        )));
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try{
            $this->info('The backup has been started');
            $this->process->mustRun();
            $this->info('The backup has been proceed successfully.');
        } catch(ProcessFailedException $exception){
            log::error('Backup exception', compact('exception'));
            $this->error('The backup process has been failed.');
        }
    }
}
