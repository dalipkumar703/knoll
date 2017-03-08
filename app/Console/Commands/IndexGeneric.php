<?php
namespace App\Console\Commands;

use Config;
use Illuminate\Console\Command;
use TNTSearch;

class IndexGeneric extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'index:generic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index the generic table';

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
        $tnt=new TNTSearch(); 

   $tnt->loadConfig([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'prestashopdb',
    'username'  => 'dalip',
    'password'  => 'dannyLUCK',
    'storage'   => 'resources/docs/'
]);

        

        $indexer = TNTSearch::createIndex('generic.index');
        $indexer->query('SELECT id, name FROM generic;');
        $indexer->run();
    }
}