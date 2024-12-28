<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Comments;

class StartScriptCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start-script';

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
        //
        Comments::create(['content'=>'new Comments']);
    }
}
